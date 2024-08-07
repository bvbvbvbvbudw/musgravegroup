<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use App\Models\Media;
use App\Models\File;

trait UploadFileTrait
{
    /**
     * Handle file upload
     *
     * @param UploadedFile $file
     * @param string $directory
     * @param bool $compress
     * @return mixed
     */
    public function uploadFile(UploadedFile $file, string $directory, bool $compress = false)
    {
        $extension = $file->getClientOriginalExtension();
        $fileName = time() . '.' . $extension;
        $filePath = $directory . '/' . $fileName;

        // Ensure the directory exists
        if (!Storage::exists($directory)) {
            Storage::makeDirectory($directory);
        }

        // Check if the file is an image
        if (in_array($extension, ['jpg', 'jpeg', 'png'])) {
            $this->storeImage($file, $filePath, $compress);
            return Media::create(['path' => $filePath]);
        } elseif ($extension === 'pdf') {
            // Store PDF file
            $file->storeAs($directory, $fileName);
            return File::create(['path' => $filePath]);
        } else {
            throw new \Exception('Unsupported file type');
        }
    }

    /**
     * Store image with optional compression and conversion to WebP
     *
     * @param UploadedFile $file
     * @param string $filePath
     * @param bool $compress
     */
    private function storeImage(UploadedFile $file, string $filePath, bool $compress)
    {
        $image = null;
        $extension = pathinfo($filePath, PATHINFO_EXTENSION);

        switch ($extension) {
            case 'jpeg':
            case 'jpg':
                $image = imagecreatefromjpeg($file->getPathname());
                break;
            case 'png':
                $image = imagecreatefrompng($file->getPathname());
                break;
        }

        if ($compress) {
            $filePath = preg_replace('/\.[^.]+$/', '.webp', $filePath);
            imagewebp($image, storage_path('app/' . $filePath), 80);
        } else {
            if ($extension == 'jpeg' || $extension == 'jpg') {
                imagejpeg($image, storage_path('app/' . $filePath), 80);
            } elseif ($extension == 'png') {
                imagepng($image, storage_path('app/' . $filePath), 8);
            }
        }

        imagedestroy($image);
    }
}

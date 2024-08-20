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
        if (!Storage::exists($directory)) {
            Storage::makeDirectory($directory);
        }
        if (in_array($extension, ['jpg', 'jpeg', 'png'])) {
            $this->storeImage($file, $filePath, $compress);
            $path = str_replace('public', 'storage', $filePath);
            if ($compress) $path = str_replace(['.jpg', '.png', '.jpeg'], '.webp', $path);
            return Media::create(['path' => $path]);
        } elseif ($extension === 'pdf') {
            $file->storeAs($directory, $fileName);
            $filePath = str_replace('public', 'storage', $filePath);
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
        $extension = pathinfo($filePath, PATHINFO_EXTENSION);
        $mimeType = $file->getMimeType();
        $image = null;
        switch ($mimeType) {
            case 'image/jpeg':
                $image = imagecreatefromjpeg($file->getPathname());
                break;
            case 'image/png':
                $image = imagecreatefrompng($file->getPathname());
                break;
            default:
                throw new \Exception('Unsupported image type');
        }
        if ($compress) {
            $filePath = preg_replace('/\.[^.]+$/', '.webp', $filePath);
            imagewebp($image, storage_path('app/' . $filePath), 80);
        } else {
            if ($mimeType === 'image/jpeg') {
                imagejpeg($image, storage_path('app/' . $filePath), 80);
            } elseif ($mimeType === 'image/png') {
                imagepng($image, storage_path('app/' . $filePath), 8);
            }
        }
        imagedestroy($image);
    }
}

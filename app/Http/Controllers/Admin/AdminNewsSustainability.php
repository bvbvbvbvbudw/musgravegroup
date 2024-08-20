<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNewsRequest;
use App\Models\Brand;
use App\Models\NewsSustainability;
use App\Models\NewsContent;
use App\Traits\HandlesStatus;
use App\Traits\UploadFileTrait;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Exception;

class AdminNewsSustainability extends Controller
{
    use UploadFileTrait, HandlesStatus;

    protected function getFields(): array
    {
        return [
            ['name' => 'title', 'label' => 'Title', 'type' => 'text', 'required' => true],
            ['name' => 'small_description', 'label' => 'Small description', 'type' => 'textarea', 'required' => false],
            ['name' => 'is_convert', 'label' => 'Need convert to .webp?', 'type' => 'checkbox', 'required' => false],
            ['name' => 'media_id', 'label' => 'Photo', 'type' => 'file', 'required' => false],
            [
                'name' => 'brand_id',
                'label' => 'Brand',
                'type' => 'select',
                'required' => false,
                'options' => Brand::pluck('name', 'id')->toArray()
            ],
            ['name' => 'content', 'label' => 'Content', 'type' => 'textarea', 'required' => true],
        ];
    }

    public function index()
    {
        $news = NewsSustainability::paginate(10);
        return view('musgravegroup.admin.pages.news.sustainability', compact('news'));
    }

    public function create()
    {
        return view('musgravegroup.admin.pages.form', [
            'title' => 'Create sustainability news',
            'fields' => $this->getFields(),
            'route' => route('admin.news.sustainability.store')
        ]);
    }

    public function store(StoreNewsRequest $request)
    {
        $data = $request->validated();
        $data['url'] = \Str::slug($request->title);

        try {
            DB::beginTransaction();

            $media = $this->uploadFile($request->file('media_id'), 'public/news', $request->boolean('is_convert'));
            $data['media_id'] = $media->id;

            $news = NewsSustainability::create($data);
            $this->handleStatus($news);

            NewsContent::create([
                'content' => $data['content'],
                'news_sustainability_id' => $news->id,
                'is_standard' => false,
            ]);

            DB::commit();
            return redirect()->back()->with('status', 'Sustainability news created successfully!');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Error creating sustainability news: ' . $e->getMessage());
            return redirect()->back()->withErrors('Failed to create sustainability news.');
        }
    }

    public function edit($id)
    {
        $news = NewsSustainability::with('media', 'content')->find($id);

        if (!$news) {
            return redirect()->back()->withErrors('Sustainability news not found.');
        }

        return view('musgravegroup.admin.pages.form', [
            'title' => 'Edit sustainability news',
            'fields' => $this->getFields(),
            'route' => route('admin.news.sustainability.update', $id),
            'model' => $news
        ]);
    }

    public function update(StoreNewsRequest $request, $id)
    {
        $data = $request->validated();
        $data['url'] = \Str::slug($request->title);

        try {
            DB::beginTransaction();

            $news = NewsSustainability::findOrFail($id);

            if ($request->hasFile('media_id')) {
                if ($news->media) {
                    Storage::delete($news->media->path);
                }
                $media = $this->uploadFile($request->file('media_id'), 'public/news', $request->boolean('is_convert'));
                $data['media_id'] = $media->id;
            }

            $news->update($data);
            $this->handleStatus($news);

            NewsContent::updateOrCreate(
                ['news_sustainability_id' => $news->id],
                ['content' => $data['content'], 'is_standard' => false]
            );

            DB::commit();
            return redirect()->back()->with('status', 'Sustainability news updated successfully!');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Error updating sustainability news: ' . $e->getMessage());
            return redirect()->back()->withErrors('Failed to update sustainability news.');
        }
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            $news = NewsSustainability::findOrFail($id);

            if ($news->media) {
                Storage::delete($news->media->path);
            }

            $news->delete();

            DB::commit();
            return redirect()->back()->with('status', 'Sustainability news deleted successfully!');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Error deleting sustainability news: ' . $e->getMessage());
            return redirect()->back()->withErrors('Failed to delete sustainability news.');
        }
    }
}

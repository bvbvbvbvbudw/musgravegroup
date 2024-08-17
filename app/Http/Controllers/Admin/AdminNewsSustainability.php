<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNewsRequest;
use App\Models\Brand;
use App\Models\News;
use App\Models\NewsContent;
use App\Models\NewsSustainability;
use App\Traits\HandlesStatus;
use App\Traits\UploadFileTrait;
use Illuminate\Support\Facades\Storage;

class AdminNewsSustainability extends Controller
{
    use UploadFileTrait, HandlesStatus;

    protected function getFields(): array
    {
        return [
            ['name' => 'title', 'label' => 'Title', 'type' => 'text', 'required' => true],
            ['name' => 'small_description', 'label' => 'Small description (optional)', 'type' => 'textarea', 'required' => false],
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


    public function index ()
    {
        $news = NewsSustainability::all();
        return view('musgravegroup.admin.pages.news.sustainability', compact('news'));
    }

    public function create ()
    {
        $title = "Create sustainability news";
        $fields = $this->getFields();
        $route = route('admin.news.sustainability.store');
        return view("musgravegroup.admin.pages.form", compact('fields', 'title', 'route'));
    }

    public function store (StoreNewsRequest $request)
    {
        $data = $request->validated();
        $media = $this->uploadFile($request->file('media_id'), 'public/news', $request->boolean('is_convert'));
        $data['media_id'] = $media->id;
        $data['url'] = \Str::slug($request->title);

        $news = NewsSustainability::create($data);
        $this->handleStatus($news);

        NewsContent::create([
            'content' => $data['content'],
            'news_sustainability_id' => $news->id,
            'is_standard' => false,
        ]);

        return redirect()->back()->with('status', 'Success');
    }

    public function edit($id)
    {
        $model = NewsSustainability::with('media', 'content')->find($id);
        if ($model) {
            $title = "Edit news";
            $fields = $this->getFields();
            $route = route('admin.news.sustainability.update', $id);

            return view('musgravegroup.admin.pages.form', compact('fields', 'title', 'route', 'model'));
        } else {
            return redirect()->back()->with(['status' => 'Not found']);
        }
    }


    public function update(StoreNewsRequest $request, $id)
    {
        $data = $request->validated();
        $news = NewsSustainability::findOrFail($id);
        if ($request->hasFile('media_id')) {
            if ($news->media) {
                Storage::delete($news->media->path);
            }
            $media = $this->uploadFile($request->file('media_id'), 'public/news', $request->boolean('is_convert'));
            $data['media_id'] = $media->id;
        }
        $data['url'] = \Str::slug($request->title);
        $news->update($data);
        $this->handleStatus($news);
        $content = NewsContent::updateOrCreate(
            ['news_id' => $news->id],
            ['content' => $data['content'], 'is_standard' => false]
        );

        return redirect()->back()->with('status', 'Success');
    }

    public function destroy($id)
    {
        $news = NewsSustainability::findOrFail($id);

        if ($news->media) {
            Storage::delete($news->media->path);
        }

        $news->delete();
        return redirect()->back()->with(['status' => 'Success']);
    }
}

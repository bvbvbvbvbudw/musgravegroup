<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNewsRequest;
use App\Models\Brand;
use App\Models\News;
use App\Models\NewsContent;
use App\Traits\UploadFileTrait;
use Illuminate\Support\Facades\Storage;

class AdminNewsController extends Controller
{
    use UploadFileTrait;

    protected function getFields()
    {
        return [
            ['name' => 'title', 'label' => 'Title', 'type' => 'text', 'required' => true],
            ['name' => 'small_description', 'label' => 'Small description (optional)', 'type' => 'textarea', 'required' => false],
            ['name' => 'is_popular', 'label' => 'Make news popular?', 'type' => 'checkbox', 'required' => false],
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
        $news = News::all();
        return view('musgravegroup.admin.pages.news.index', compact('news'));
    }

    public function create()
    {
        $title = "Create news";
        $fields = $this->getFields();
        $route = route('admin.news.store');
        return view('musgravegroup.admin.pages.form', compact('fields', 'title', 'route'));
    }

    public function store(StoreNewsRequest $request)
    {
        $data = $request->validated();
        $data['is_popular'] = $request->boolean('is_popular');
        $media = $this->uploadFile($request->file('media_id'), 'public/news', $request->boolean('is_convert'));
        $data['media_id'] = $media->id;
        $data['url'] = \Str::slug($request->title);

        $news = News::create($data);

        if ($data['is_popular']) {
            $old = News::where('is_popular', 1)->where('id', '<>', $news->id)->first();
            if ($old) {
                $old->is_popular = 0;
                $old->save();
            }
            $news->is_popular = 1;
            $news->save();
        }

        NewsContent::create([
            'content' => $data['content'],
            'news_id' => $news->id,
            'is_standard' => true,
        ]);

        return redirect()->back()->with('status', 'Success');
    }

    public function edit($id)
    {
        $item = News::find($id);
        if ($item) {
            $title = "Edit news";
            $fields = $this->getFields();
            $route = route('admin.news.update', $id);
            return view('musgravegroup.admin.pages.form', compact('fields', 'title', 'route', 'item'));
        } else {
            return redirect()->back()->with(['status' => 'Not found']);
        }
    }

    public function update(StoreNewsRequest $request, $id)
    {
        $data = $request->validated();
        $news = News::findOrFail($id);

        // Handle media file upload if a new file is provided
        if ($request->hasFile('media_id')) {
            // Delete the old media if it exists
            if ($news->media) {
                Storage::delete($news->media->path);
            }

            // Upload the new media
            $media = $this->uploadFile($request->file('media_id'), 'public/news', $request->boolean('is_convert'));
            $data['media_id'] = $media->id;
        }

        $data['is_popular'] = $request->boolean('is_popular');
        $data['url'] = \Str::slug($request->title);

        // Update news
        $news->update($data);

        if ($data['is_popular']) {
            $old = News::where('is_popular', 1)->where('id', '<>', $news->id)->first();
            if ($old) {
                $old->is_popular = 0;
                $old->save();
            }
            $news->is_popular = 1;
            $news->save();
        } else {
            $news->is_popular = 0;
            $news->save();
        }
        $content = NewsContent::updateOrCreate(
            ['news_id' => $news->id],
            ['content' => $data['content'], 'is_standard' => true]
        );

        return redirect()->back()->with('status', 'Success');
    }

    public function destroy($id)
    {
        $news = News::findOrFail($id);

        if ($news->media) {
            Storage::delete($news->media->path);
        }

        $news->delete();
        return redirect()->back()->with(['status' => 'Success']);
    }
}

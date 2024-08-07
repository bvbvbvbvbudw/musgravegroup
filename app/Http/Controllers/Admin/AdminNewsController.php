<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News; // Add News model import
use App\Http\Requests\StoreNewsRequest;
use App\Models\NewsContent;
use App\Traits\UploadFileTrait;
use Illuminate\Support\Str;

// Add correct request import

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
            ['name' => 'media_id', 'label' => 'Photo', 'type' => 'file', 'required' => true],
            ['name' => 'brand_id', 'label' => 'Brand', 'type' => 'select', 'required' => false],
            ['name' => 'content', 'label' => 'Content', 'type' => 'textarea', 'required' => true],
        ];
    }

    public function index()
    {
        return view('musgravegroup.admin.pages.news.index');
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
        \Log::info($request->all());

        $data = $request->validated();
        $media = $this->uploadFile($request->file('media_id'), 'public/news', $request->boolean('is_convert'));
        \Log::info($media);
        // TODO: сделать чтобы одна популярная была. Сделать вывод в админке новостей и тд. Сделать селект брендов. Переделать сохранения пути в новостях.
        // Assign media_id and url to the $data array
        $data['media_id'] = $media->id; // Assuming $media is an instance of the Media model
        $data['url'] = \Str::slug($request->title);

        $news = News::create($data);

        $content = NewsContent::create([
            'content' => $data['content'],
            'news_id' => $news->id,
            'is_standard' => true,
        ]);

        return redirect()->back()->with(['status' => 'Success']);
    }


    public function edit($id)
    {
        $item = News::find($id);
        if($item)
        {
            $title = "Edit news";
            $fields = $this->getFields();
            $route = route('admin.news.update', $id);
            return view('musgravegroup.admin.pages.form', compact('fields', 'title', 'route', 'item'));
        }
        else
        {
            return redirect()->back()->with(['status' => 'Not found']);
        }
    }

    public function show($id)
    {
        //
    }

    public function update(StoreNewsRequest $request, $id)
    {
        $data = $request->validated();
        News::find($id)->update($data);
        return redirect()->back()->with(['status' => 'Success']);
    }

    public function destroy($id)
    {
        News::findOrFail($id)->delete();
        return redirect()->back()->with(['status' => 'Success']);
    }
}

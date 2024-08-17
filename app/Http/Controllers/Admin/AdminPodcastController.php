<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\StorePodcastRequest;
use App\Models\Brand;
use App\Models\News;
use App\Models\NewsContent;
use App\Models\NewsSustainability;
use App\Models\Podcast;
use App\Traits\HandlesStatus;
use App\Traits\UploadFileTrait;
use Illuminate\Support\Facades\Storage;

class AdminPodcastController extends Controller
{
    use UploadFileTrait, HandlesStatus;

    protected function getFields(): array
    {
        return [
            ['name' => 'title', 'label' => 'Title', 'type' => 'text', 'required' => true],
            ['name' => 'spotify', 'label' => 'Spotify', 'type' => 'text', 'required' => true],
            ['name' => 'apple', 'label' => 'Apple', 'type' => 'text', 'required' => true],
            ['name' => 'buzz', 'label' => 'Buzz', 'type' => 'text', 'required' => true],
            ['name' => 'content', 'label' => 'Content', 'type' => 'textarea', 'required' => true],
            ['name' => 'small_description', 'label' => 'Small description', 'type' => 'textarea', 'required' => true],
            ['name' => 'is_convert', 'label' => 'Need convert to .webp?', 'type' => 'checkbox', 'required' => false],
            ['name' => 'media_id', 'label' => 'Photo', 'type' => 'file', 'required' => true],
        ];
    }

    public function index()
    {
        $podcasts = Podcast::all();
        return view('musgravegroup.admin.pages.podcasts', compact('podcasts'));
    }


    public function create()
    {
        $title = "Create podcast";
        $fields = $this->getFields();
        $route = route('admin.podcasts.store');
        return view('musgravegroup.admin.pages.form', compact('fields', 'title', 'route'));
    }

    public function store(StorePodcastRequest $request)
    {
        $data = $request->validated();
        $media = $this->uploadFile($request->file('media_id'), 'public/podcasts', $request->boolean('is_convert'));
        $data['media_id'] = $media->id;
        $data['url'] = \Str::slug($request->title);

        $podcast = Podcast::create($data);
        $this->handleStatus($podcast);

        return redirect()->back()->with('status', 'Success');
    }

    public function edit($id)
    {
        $model = Podcast::find($id);
        if ($model) {
            $title = "Edit podcast";
            $fields = $this->getFields();
            $route = route('admin.podcasts.update', $id);
            return view('musgravegroup.admin.pages.form', compact('fields', 'title', 'route', 'model'));
        } else {
            return redirect()->back()->with(['status' => 'Not found']);
        }
    }

    public function update(StorePodcastRequest $request, $id)
    {
        $data = $request->validated();
        $podcast = Podcast::findOrFail($id);
        if ($request->hasFile('media_id')) {
            if ($podcast->media) {
                Storage::delete($podcast->media->path);
            }
            $media = $this->uploadFile($request->file('media_id'), 'public/podcasts', $request->boolean('is_convert'));
            $data['media_id'] = $media->id;
        }
        $data['url'] = \Str::slug($request->title);
        $podcast->update($data);
        $this->handleStatus($podcast);


        return redirect()->back()->with('status', 'Success');
    }

    public function destroy($id)
    {
        $podcast = Podcast::findOrFail($id);
        if ($podcast->media) {
            Storage::delete($podcast->media->path);
        }
        $podcast->delete();
        return redirect()->back()->with(['status' => 'Success']);
    }
}

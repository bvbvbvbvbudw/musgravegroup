<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePodcastRequest;
use App\Models\Podcast;
use App\Traits\HandlesStatus;
use App\Traits\UploadFileTrait;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Exception;

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
            ['name' => 'media_id', 'label' => 'Photo', 'type' => 'file', 'required' => false],
        ];
    }

    public function index()
    {
        $podcasts = Podcast::paginate(10);
        return view('musgravegroup.admin.pages.podcasts', compact('podcasts'));
    }

    public function create()
    {
        return view('musgravegroup.admin.pages.form', [
            'title' => 'Create podcast',
            'fields' => $this->getFields(),
            'route' => route('admin.podcasts.store')
        ]);
    }

    public function store(StorePodcastRequest $request)
    {
        $data = $request->validated();
        $data['url'] = \Str::slug($request->title);

        try {
            DB::beginTransaction();

            $media = $this->uploadFile($request->file('media_id'), 'public/podcasts', $request->boolean('is_convert'));
            $data['media_id'] = $media->id;

            $podcast = Podcast::create($data);
            $this->handleStatus($podcast);

            DB::commit();
            return redirect()->back()->with('status', 'Podcast created successfully!');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Error creating podcast: ' . $e->getMessage());
            return redirect()->back()->withErrors('Failed to create podcast.');
        }
    }

    public function edit($id)
    {
        $podcast = Podcast::find($id);

        if (!$podcast) {
            return redirect()->back()->withErrors('Podcast not found.');
        }

        return view('musgravegroup.admin.pages.form', [
            'title' => 'Edit podcast',
            'fields' => $this->getFields(),
            'route' => route('admin.podcasts.update', $id),
            'model' => $podcast
        ]);
    }

    public function update(StorePodcastRequest $request, $id)
    {
        $data = $request->validated();
        $data['url'] = \Str::slug($request->title);

        try {
            DB::beginTransaction();

            $podcast = Podcast::findOrFail($id);

            if ($request->hasFile('media_id')) {
                if ($podcast->media) {
                    Storage::delete($podcast->media->path);
                }
                $media = $this->uploadFile($request->file('media_id'), 'public/podcasts', $request->boolean('is_convert'));
                $data['media_id'] = $media->id;
            }

            $podcast->update($data);
            $this->handleStatus($podcast);

            DB::commit();
            return redirect()->back()->with('status', 'Podcast updated successfully!');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Error updating podcast: ' . $e->getMessage());
            return redirect()->back()->withErrors('Failed to update podcast.');
        }
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            $podcast = Podcast::findOrFail($id);

            if ($podcast->media) {
                Storage::delete($podcast->media->path);
            }

            $podcast->delete();

            DB::commit();
            return redirect()->back()->with('status', 'Podcast deleted successfully!');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Error deleting podcast: ' . $e->getMessage());
            return redirect()->back()->withErrors('Failed to delete podcast.');
        }
    }
}

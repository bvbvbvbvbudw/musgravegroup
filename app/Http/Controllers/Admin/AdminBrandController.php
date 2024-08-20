<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBrandRequest;
use App\Models\Brand;
use App\Models\News;
use App\Models\Report;
use App\Traits\HandlesStatus;
use App\Traits\UploadFileTrait;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Exception;

class AdminBrandController extends Controller
{
    use UploadFileTrait, HandlesStatus;

    protected function getFields(): array
    {
        return [
            ['name' => 'title', 'label' => 'Title', 'type' => 'text', 'required' => true],
            ['name' => 'name', 'label' => 'Name', 'type' => 'text', 'required' => true],
            ['name' => 'url', 'label' => 'Url site', 'type' => 'text', 'required' => true],
            ['name' => 'small_description', 'label' => 'Small description', 'type' => 'textarea', 'required' => true],
            [
                'name' => 'news_id',
                'label' => 'News',
                'type' => 'select',
                'required' => false,
                'options' => News::pluck('title', 'id')->toArray()
            ],
            ['name' => 'is_convert', 'label' => 'Need convert to .webp?', 'type' => 'checkbox', 'required' => false],
            ['name' => 'media_logo_id', 'label' => 'Logo', 'type' => 'file', 'required' => false],
            ['name' => 'media_bg_id', 'label' => 'Background', 'type' => 'file', 'required' => false],
        ];
    }

    public function index()
    {
        $brands = Brand::paginate(10);
        return view('musgravegroup.admin.pages.brands', compact('brands'));
    }

    public function create()
    {
        return view('musgravegroup.admin.pages.form', [
            'title' => 'Create brand',
            'fields' => $this->getFields(),
            'route' => route('admin.brands.store')
        ]);
    }

    public function store(StoreBrandRequest $request)
    {
        $data = $request->validated();
        try {
            DB::beginTransaction();

            $logo = $this->uploadFile($request->file('media_logo_id'), 'public/brand/logo', $request->boolean('is_convert'));
            $bg = $this->uploadFile($request->file('media_bg_id'), 'public/brand/bg', $request->boolean('is_convert'));
            $data['media_logo_id'] = $logo->id;
            $data['media_bg_id'] = $bg->id;

            $brand = Brand::create($data);
            $this->handleStatus($brand);

            DB::commit();
            return redirect()->back()->with('status', 'Brand created successfully!');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Error creating brand: ' . $e->getMessage());
            return redirect()->back()->withErrors('Failed to create brand.');
        }
    }

    public function edit($id)
    {
        $brand = Brand::find($id);

        if (!$brand) {
            return redirect()->back()->withErrors('Brand not found.');
        }

        return view('musgravegroup.admin.pages.form', [
            'title' => 'Edit report',
            'fields' => $this->getFields(),
            'route' => route('admin.brands.update', $id),
            'model' => $brand
        ]);
    }

    public function update(StoreBrandRequest     $request, $id)
    {
        $data = $request->validated();
        try {
            DB::beginTransaction();

            $brand = Brand::findOrFail($id);

            if ($request->hasFile('media_logo_id')) {
                if ($brand->media) {
                    Storage::delete($brand->logo->path);
                }
                $logo = $this->uploadFile($request->file('media_logo_id'), 'public/brand/logo', $request->boolean('is_convert'));
                $data['media_id'] = $logo->id;
            }
            if ($request->hasFile('media_bg_id')) {
                if ($brand->file) {
                    Storage::delete($brand->bg->path);
                }
                $bg = $this->uploadFile($request->file('media_bg_id'), 'public/brand/bg', $request->boolean('is_convert'));
                $data['media_bg_id'] = $bg->id;
            }

            $brand->update($data);
            $this->handleStatus($brand);

            DB::commit();
            return redirect()->back()->with('status', 'Brand updated successfully!');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Error updating brand: ' . $e->getMessage());
            return redirect()->back()->withErrors('Failed to update brand.');
        }
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            $brand = Report::findOrFail($id);

            if ($brand->media) {
                Storage::delete($brand->logo->path);
            }
            if($brand->file){
                Storage::delete($brand->bg->path);
            }

            $brand->delete();

            DB::commit();
            return redirect()->back()->with('status', 'Brand deleted successfully!');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Error deleting brand: ' . $e->getMessage());
            return redirect()->back()->withErrors('Failed to delete brand.');
        }
    }
}

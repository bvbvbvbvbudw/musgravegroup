<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReportRequest;
use App\Models\Report;
use App\Traits\HandlesStatus;
use App\Traits\UploadFileTrait;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Exception;

class AdminReportController extends Controller
{
    use UploadFileTrait, HandlesStatus;

    protected function getFields(): array
    {
        return [
            ['name' => 'title', 'label' => 'Title', 'type' => 'text', 'required' => true],
            ['name' => 'file_id', 'label' => 'File', 'type' => 'file', 'required' => true],
            ['name' => 'is_convert', 'label' => 'Need convert to .webp?', 'type' => 'checkbox', 'required' => false],
            ['name' => 'media_id', 'label' => 'Photo', 'type' => 'file', 'required' => true],
        ];
    }

    public function index()
    {
        $reports = Report::paginate(10);
        return view('musgravegroup.admin.pages.reports', compact('reports'));
    }

    public function create()
    {
        return view('musgravegroup.admin.pages.form', [
            'title' => 'Create report',
            'fields' => $this->getFields(),
            'route' => route('admin.reports.store')
        ]);
    }

    public function store(StoreReportRequest $request)
    {
        $data = $request->validated();
        try {
            DB::beginTransaction();

            $media = $this->uploadFile($request->file('media_id'), 'public/reports/img', $request->boolean('is_convert'));
            $file = $this->uploadFile($request->file('file_id'), 'public/reports/files', $request->boolean('is_convert'));
            $data['media_id'] = $media->id;
            $data['file_id'] = $file->id;

            $report = Report::create($data);
            $this->handleStatus($report);

            DB::commit();
            return redirect()->back()->with('status', 'Report created successfully!');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Error creating report: ' . $e->getMessage());
            return redirect()->back()->withErrors('Failed to create report.');
        }
    }

    public function edit($id)
    {
        $report = Report::find($id);

        if (!$report) {
            return redirect()->back()->withErrors('Report not found.');
        }

        return view('musgravegroup.admin.pages.form', [
            'title' => 'Edit report',
            'fields' => $this->getFields(),
            'route' => route('admin.reports.update', $id),
            'model' => $report
        ]);
    }

    public function update(StoreReportReqeust $request, $id)
    {
        $data = $request->validated();
        try {
            DB::beginTransaction();

            $report = Report::findOrFail($id);

            if ($request->hasFile('media_id')) {
                if ($report->media) {
                    Storage::delete($report->media->path);
                }
                $media = $this->uploadFile($request->file('media_id'), 'public/reports/img', $request->boolean('is_convert'));
                $data['media_id'] = $media->id;
            }
            if ($request->hasFile('file_id')) {
                if ($report->file) {
                    Storage::delete($report->file->path);
                }
                $file = $this->uploadFile($request->file('file_id'), 'public/reports/files', $request->boolean('is_convert'));
                $data['file_id'] = $file->id;
            }

            $report->update($data);
            $this->handleStatus($report);

            DB::commit();
            return redirect()->back()->with('status', 'Report updated successfully!');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Error updating Report: ' . $e->getMessage());
            return redirect()->back()->withErrors('Failed to update report.');
        }
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            $report = Report::findOrFail($id);

            if ($report->media) {
                Storage::delete($report->media->path);
            }
            if($report->file){
                Storage::delete($report->file->path);
            }

            $report->delete();

            DB::commit();
            return redirect()->back()->with('status', 'Report deleted successfully!');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Error deleting report: ' . $e->getMessage());
            return redirect()->back()->withErrors('Failed to delete report.');
        }
    }
}

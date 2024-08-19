<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\NewsSustainability;
use App\Models\Podcast;
use App\Models\Vacancy;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AdminReviewController extends Controller
{
    use HandlesStatus;

    public function list($model)
    {
        try {
            $modelClass = $this->getModelClass($model);
            $records = $this->getFields($modelClass)->get();
            return view('musgravegroup.admin.pages.review.list', compact('records', 'model'));
        } catch (\Exception $e) {
            Log::error('Error listing records: ' . $e->getMessage());
            return redirect()->back()->withErrors('Failed to retrieve records.');
        }
    }

    public function index($model, $id)
    {
        try {
            $modelClass = $this->getModelClass($model);
            $record = $this->getFields($modelClass)->findOrFail($id);
            $fields = $this->getFieldDefinitions($modelClass);
            return view('musgravegroup.admin.pages.review.review', compact('record', 'model', 'fields'));
        } catch (\Exception $e) {
            Log::error('Error retrieving record: ' . $e->getMessage());
            return redirect()->back()->withErrors('Failed to retrieve record.');
        }
    }

    private function getFields($modelClass)
    {
        return match ($modelClass) {
            News::class, NewsSustainability::class => $this->getFieldsNews($modelClass),
            Podcast::class => $this->getFieldsPodcast($modelClass),
            Vacancy::class => $this->getFieldsVacancy($modelClass),
            default => $modelClass::query(),
        };
    }

    private function getFieldsNews($modelClass)
    {
        return $modelClass::with(['content', 'media']);
    }

    private function getFieldsVacancy($modelClass)
    {
        return $modelClass::with(['category', 'location', 'content']);
    }

    private function getFieldsPodcast($modelClass)
    {
        return $modelClass::with(['media']);
    }

    private function getModelClass($model)
    {
        return 'App\\Models\\' . Str::studly($model);
    }

    private function getFieldDefinitions($modelClass)
    {
        return match ($modelClass) {
            News::class => $this->getNewsFields(),
            Podcast::class => $this->getPodcastFields(),
            NewsSustainability::class => $this->getNewsSusFields(),
            Vacancy::class => $this->getVacancyFields(),
            default => [],
        };
    }

    protected function getNewsFields(): array
    {
        return [
            ['name' => 'title', 'label' => 'Title', 'type' => 'text'],
            ['name' => 'small_description', 'label' => 'Small description', 'type' => 'textarea'],
            ['name' => 'is_popular', 'label' => 'Is Popular?', 'type' => 'checkbox'],
            ['name' => 'is_convert', 'label' => 'Convert to .webp?', 'type' => 'checkbox'],
        ];
    }

    protected function getVacancyFields(): array
    {
        return [
            ['name' => 'title', 'label' => 'Title', 'type' => 'text', 'required' => true],
            ['name' => 'type', 'label' => 'Type', 'type' => 'text', 'required' => true],
            ['name' => 'contract_type', 'label' => 'Contract type', 'type' => 'text', 'required' => false],
        ];
    }

    protected function getNewsSusFields(): array
    {
        return [
            ['name' => 'title', 'label' => 'Title', 'type' => 'text'],
            ['name' => 'small_description', 'label' => 'Small description', 'type' => 'textarea'],
            ['name' => 'is_convert', 'label' => 'Convert to .webp?', 'type' => 'checkbox'],
        ];
    }

    protected function getPodcastFields(): array
    {
        return [
            ['name' => 'title', 'label' => 'Title', 'type' => 'text'],
            ['name' => 'url', 'label' => 'URL', 'type' => 'text'],
            ['name' => 'spotify', 'label' => 'Spotify', 'type' => 'text'],
            ['name' => 'apple', 'label' => 'Apple URL', 'type' => 'text'],
            ['name' => 'buzz', 'label' => 'Buzz URL', 'type' => 'text'],
            ['name' => 'small_description', 'label' => 'Small description', 'type' => 'textarea']
        ];
    }

    public function approve($model, $id)
    {
        return $this->updateStatus($model, $id, 'approved');
    }

    public function reject($model, $id)
    {
        return $this->updateStatus($model, $id, 'rejected');
    }

    private function updateStatus($model, $id, $status)
    {
        try {
            $modelClass = $this->getModelClass($model);
            $record = $modelClass::findOrFail($id);
            $this->handleStatus($record, $status);
            return redirect()->route('admin.manage.index', [$model, $id])->with('status', ucfirst($status) . ' successfully!');
        } catch (\Exception $e) {
            Log::error("Error updating status to $status: " . $e->getMessage());
            return redirect()->route('admin.manage.index', [$model, $id])->withErrors('Failed to update status.');
        }
    }
}

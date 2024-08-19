<?php

namespace App\Http\Controllers\Admin;

use App\Events\VacancyCreated;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreVacancyRequest;
use App\Models\Vacancy;
use App\Models\VacancyCategory;
use App\Models\VacancyContent;
use App\Models\VacancyLocation;
use App\Traits\HandlesStatus;
use App\Traits\UploadFileTrait;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

class AdminVacancyController extends Controller
{
    use UploadFileTrait, HandlesStatus;

    /**
     * Get form fields for vacancy.
     *
     * @return array
     */
    protected function getFields(): array
    {
        return [
            ['name' => 'title', 'label' => 'Title', 'type' => 'text', 'required' => true],
            ['name' => 'type', 'label' => 'Type', 'type' => 'text', 'required' => true],
            ['name' => 'contract_type', 'label' => 'Contract type', 'type' => 'text', 'required' => false],
            [
                'name' => 'category_id',
                'label' => 'Select category',
                'type' => 'select',
                'required' => true,
                'options' => VacancyCategory::pluck('category', 'id')->toArray()
            ],
            [
                'name' => 'location_id',
                'label' => 'Select location',
                'type' => 'select',
                'required' => false,
                'options' => VacancyLocation::pluck('location', 'id')->toArray()
            ],
            ['name' => 'content', 'label' => 'Content', 'type' => 'textarea', 'required' => true],
        ];
    }

    /**
     * Display a listing of the vacancies.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        try {
            $vacancies = Vacancy::paginate(10);
            return view('musgravegroup.admin.pages.vacancies', compact('vacancies'));
        } catch (\Exception $e) {
            Log::error('Error retrieving vacancies: ' . $e->getMessage());
            return redirect()->back()->withErrors('Failed to retrieve vacancies.');
        }
    }

    /**
     * Show the form for creating a new vacancy.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $title = "Create vacancy";
        $fields = $this->getFields();
        $route = route('admin.vacancy.store');
        return view("musgravegroup.admin.pages.form", compact('fields', 'title', 'route'));
    }

    /**
     * Store a newly created vacancy in storage.
     *
     * @param  \App\Http\Requests\StoreVacancyRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreVacancyRequest $request)
    {
        try {
            $data = $request->validated();
            $data['url'] = Str::slug($data['title']);
            $content = VacancyContent::create(['content' => $data['content']]);
            $data['is_closed'] = false;
            $data['end_date'] = now()->addMonth();
            $data['content_id'] = $content->id;
            $vacancy = Vacancy::create($data);
            $this->handleStatus($vacancy);
            event(new VacancyCreated($vacancy));
            return redirect()->route('admin.vacancy.index')->with('status', 'Vacancy created successfully!');
        } catch (\Exception $e) {
            Log::error('Error creating vacancy: ' . $e->getMessage());
            return redirect()->back()->withErrors('Failed to create vacancy.');
        }
    }

    /**
     * Show the form for editing the specified vacancy.
     *
     * @param  int  $id
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse
     */
    public function edit($id)
    {
        try {
            $model = Vacancy::with('content')->findOrFail($id);
            $title = "Edit vacancy";
            $fields = $this->getFields();
            $route = route('admin.vacancy.update', $id);
            return view('musgravegroup.admin.pages.form', compact('fields', 'title', 'route', 'model'));
        } catch (\Exception $e) {
            Log::error('Error retrieving vacancy for edit: ' . $e->getMessage());
            return redirect()->back()->withErrors('Vacancy not found.');
        }
    }

    /**
     * Update the specified vacancy in storage.
     *
     * @param  \App\Http\Requests\StoreVacancyRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(StoreVacancyRequest $request, $id)
    {
        try {
            $data = $request->validated();
            $vacancy = Vacancy::with('content')->findOrFail($id);
            $data['url'] = Str::slug($data['title']);
            $data['end_date'] = now()->addMonth();
            $data['is_closed'] = false;
            $vacancy->update($data);
            $this->handleStatus($vacancy);
            if ($vacancy->content) {
                $vacancy->content->update(['content' => $data['content']]);
            } else {
                $content = VacancyContent::create(['content' => $data['content']]);
                $vacancy->update(['content_id' => $content->id]);
            }
            return redirect()->route('admin.vacancy.index')->with('status', 'Vacancy updated successfully!');
        } catch (\Exception $e) {
            Log::error('Error updating vacancy: ' . $e->getMessage());
            return redirect()->back()->withErrors('Failed to update vacancy.');
        }
    }

    /**
     * Remove the specified vacancy from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        try {
            $vacancy = Vacancy::findOrFail($id);
            if ($vacancy->content) {
                Storage::delete($vacancy->content->content);
            }
            $vacancy->delete();
            return redirect()->route('admin.vacancy.index')->with('status', 'Vacancy deleted successfully!');
        } catch (\Exception $e) {
            Log::error('Error deleting vacancy: ' . $e->getMessage());
            return redirect()->back()->withErrors('Failed to delete vacancy.');
        }
    }
}

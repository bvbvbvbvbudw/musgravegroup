<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreVacancyRequest;
use App\Models\Vacancy;
use App\Models\VacancyContent;
use App\Traits\UploadFileTrait;
use Illuminate\Support\Facades\Storage;

class AdminVacancyController extends Controller
{
    use UploadFileTrait;

    protected function getFields(): array
    {
        return [
            ['name' => 'title', 'label' => 'Title', 'type' => 'text', 'required' => true],
            ['name' => 'type', 'label' => 'Type', 'type' => 'text', 'required' => true],
            ['name' => 'location', 'label' => 'Location', 'type' => 'text', 'required' => false],
            ['name' => 'contract_type', 'label' => 'Contract type', 'type' => 'text', 'required' => false],
            ['name' => 'content', 'label' => 'Content', 'type' => 'textarea', 'required' => true],
        ];
    }

    public function index()
    {
        $vacancies = Vacancy::all();
        return view('musgravegroup.admin.pages.vacancies', compact('vacancies'));
    }

    public function create()
    {
        $title = "Create vacancy";
        $fields = $this->getFields();
        $route = route('admin.vacancy.store');
        return view("musgravegroup.admin.pages.form", compact('fields', 'title', 'route'));
    }

    public function store(StoreVacancyRequest $request)
    {
        \Log::info($request);
        $data = $request->validated();
        \Log::info($data);
        $data['url'] = \Str::slug($data['title']);
        $content = VacancyContent::create([
            'content' => $data['content'],
        ]);
        $data['is_closed'] = 0;
        $data['end_date'] = now()->addMonth();
        $data['content_id'] = $content->id;
        $vacancy = Vacancy::create($data);
        return redirect()->back()->with('status', 'Success');
    }

    public function edit($id)
    {
        $model = Vacancy::with('content')->find($id);
        if ($model) {
            $title = "Edit vacancy";
            $fields = $this->getFields();
            $route = route('admin.vacancy.update', $id);

            return view('musgravegroup.admin.pages.form', compact('fields', 'title', 'route', 'model'));
        } else {
            return redirect()->back()->with(['status' => 'Not found']);
        }
    }


    public function update(StoreVacancyRequest $request, $id)
    {
        $data = $request->validated();
        $vacancy = Vacancy::with('content')->findOrFail($id);
        $data['url'] = \Str::slug($data['title']);
        $data['end_date'] = now()->addMonth();
        $data['is_closed'] = 0;
        $vacancy->update($data);
        if ($vacancy->content) {
            $vacancy->content->update(['content' => $data['content']]);
        } else {
            $content = VacancyContent::create(['content' => $data['content']]);
            $vacancy->update(['content_id' => $content->id]);
        }
        return redirect()->back()->with('status', 'Success');
    }


    public function destroy($id)
    {
        $vacancy = Vacancy::findOrFail($id);
        if ($vacancy->content) {
            Storage::delete($vacancy->content->content);
        }
        $vacancy->delete();
        return redirect()->back()->with(['status' => 'Success']);
    }
}

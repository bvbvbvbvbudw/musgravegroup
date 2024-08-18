<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\VacancyCategory;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    protected function getFields(): array
    {
        return [
            ['name' => 'category', 'label' => 'Category', 'type' => 'text', 'required' => true],
        ];
    }

    public function index()
    {
        $categories = VacancyCategory::all();
        return view('musgravegroup.admin.pages.categories', compact('categories'));
    }

    public function create()
    {
        $title = "Create category";
        $fields = $this->getFields();
        $route = route('admin.vacancy.category.store');
        return view("musgravegroup.admin.pages.form", compact('fields', 'title', 'route'));
    }

    public function store(Request $request)
    {
        $data = $request->validate(['category' => 'string']);
        $category = VacancyCategory::create($data);
        return redirect()->back()->with('status', 'Success');
    }

    public function edit($id)
    {
        $model = VacancyCategory::find($id);
        if ($model) {
            $title = "Edit category";
            $fields = $this->getFields();
            $route = route('admin.vacancy.category.update', $id);

            return view('musgravegroup.admin.pages.form', compact('fields', 'title', 'route', 'model'));
        } else {
            return redirect()->back()->with(['status' => 'Not found']);
        }
    }


    public function update(Request $request, $id)
    {
        $data = $request->validate(['category' => 'string']);
        $category = VacancyCategory::findOrFail($id);
        $category->update($data);
        return redirect()->back()->with('status', 'Success');
    }


    public function destroy($id)
    {
        $category = VacancyCategory::findOrFail($id);
        $category->delete();
        return redirect()->back()->with(['status' => 'Success']);
    }
}

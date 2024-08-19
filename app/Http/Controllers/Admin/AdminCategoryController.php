<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VacancyCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Exception;

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
        $categories = VacancyCategory::paginate(10);
        return view('musgravegroup.admin.pages.categories', compact('categories'));
    }

    public function create()
    {
        return view('musgravegroup.admin.pages.form', [
            'title' => 'Create category',
            'fields' => $this->getFields(),
            'route' => route('admin.vacancy.category.store')
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate(['category' => 'required|string']);

        try {
            DB::beginTransaction();
            $category = VacancyCategory::create($data);
            DB::commit();
            return redirect()->back()->with('status', 'Category created successfully!');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Error creating category: ' . $e->getMessage());

            return redirect()->back()->withErrors('Failed to create category.');
        }
    }

    public function edit($id)
    {
        $category = VacancyCategory::find($id);

        if (!$category) {
            return redirect()->back()->withErrors('Category not found.');
        }

        return view('musgravegroup.admin.pages.form', [
            'title' => 'Edit category',
            'fields' => $this->getFields(),
            'route' => route('admin.vacancy.category.update', $id),
            'model' => $category
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate(['category' => 'required|string']);

        try {
            DB::beginTransaction();

            $category = VacancyCategory::findOrFail($id);
            $category->update($data);

            DB::commit();
            return redirect()->back()->with('status', 'Category updated successfully!');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Error updating category: ' . $e->getMessage());

            return redirect()->back()->withErrors('Failed to update category.');
        }
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            $category = VacancyCategory::findOrFail($id);
            $category->delete();

            DB::commit();
            return redirect()->back()->with('status', 'Category deleted successfully!');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Error deleting category: ' . $e->getMessage());

            return redirect()->back()->withErrors('Failed to delete category.');
        }
    }
}

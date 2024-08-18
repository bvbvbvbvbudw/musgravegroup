<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\VacancyCategory;
use App\Models\VacancyLocation;
use Illuminate\Http\Request;

class AdminLocationController extends Controller
{
    protected function getFields(): array
    {
        return [
            ['name' => 'location', 'label' => 'Location', 'type' => 'text', 'required' => true],
        ];
    }

    public function index()
    {
        $locations = VacancyLocation::all();
        return view('musgravegroup.admin.pages.locations', compact('locations'));
    }

    public function create()
    {
        $title = "Create location";
        $fields = $this->getFields();
        $route = route('admin.vacancy.location.store');
        return view("musgravegroup.admin.pages.form", compact('fields', 'title', 'route'));
    }

    public function store(Request $request)
    {
        $data = $request->validate(['location' => 'string']);
        $location = VacancyLocation::create($data);
        return redirect()->back()->with('status', 'Success');
    }

    public function edit($id)
    {
        $model = VacancyLocation::find($id);
        if ($model) {
            $title = "Edit location";
            $fields = $this->getFields();
            $route = route('admin.vacancy.location.update', $id);

            return view('musgravegroup.admin.pages.form', compact('fields', 'title', 'route', 'model'));
        } else {
            return redirect()->back()->with(['status' => 'Not found']);
        }
    }


    public function update(Request $request, $id)
    {
        $data = $request->validate(['location' => 'string']);
        $location = VacancyLocation::findOrFail($id);
        $location->update($data);
        return redirect()->back()->with('status', 'Success');
    }


    public function destroy($id)
    {
        $location = VacancyLocation::findOrFail($id);
        $location->delete();
        return redirect()->back()->with(['status' => 'Success']);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VacancyLocation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Exception;

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
        $locations = VacancyLocation::paginate(10);
        return view('musgravegroup.admin.pages.locations', compact('locations'));
    }

    public function create()
    {
        return view('musgravegroup.admin.pages.form', [
            'title' => 'Create location',
            'fields' => $this->getFields(),
            'route' => route('admin.vacancy.location.store')
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate(['location' => 'required|string']);

        try {
            DB::beginTransaction();

            $location = VacancyLocation::create($data);

            DB::commit();
            return redirect()->back()->with('status', 'Location created successfully!');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Error creating location: ' . $e->getMessage());

            return redirect()->back()->withErrors('Failed to create location.');
        }
    }

    public function edit($id)
    {
        $location = VacancyLocation::find($id);

        if (!$location) {
            return redirect()->back()->withErrors('Location not found.');
        }

        return view('musgravegroup.admin.pages.form', [
            'title' => 'Edit location',
            'fields' => $this->getFields(),
            'route' => route('admin.vacancy.location.update', $id),
            'model' => $location
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate(['location' => 'required|string']);

        try {
            DB::beginTransaction();

            $location = VacancyLocation::findOrFail($id);
            $location->update($data);

            DB::commit();
            return redirect()->back()->with('status', 'Location updated successfully!');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Error updating location: ' . $e->getMessage());

            return redirect()->back()->withErrors('Failed to update location.');
        }
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            $location = VacancyLocation::findOrFail($id);
            $location->delete();

            DB::commit();
            return redirect()->back()->with('status', 'Location deleted successfully!');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Error deleting location: ' . $e->getMessage());

            return redirect()->back()->withErrors('Failed to delete location.');
        }
    }
}

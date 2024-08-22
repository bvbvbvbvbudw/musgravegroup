<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CareerForm;
use App\Models\UserApplied;
use App\Models\UserSupplier;
use Illuminate\Support\Facades\Log;

class AdminUsersAppliedController extends Controller
{
    /**
     * Display a list of users who have applied.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        try {
            $users = UserApplied::paginate(10);
            return view('musgravegroup.admin.pages.applieds', compact('users'));
        } catch (\Exception $e) {
            Log::error('Error retrieving applied users: ' . $e->getMessage());
            return redirect()->back()->withErrors('Failed to retrieve applied users.');
        }
    }

    /**
     * Display the form for managing career forms.
     *
     * @return \Illuminate\View\View
     */
    public function form()
    {
        try {
            $forms = CareerForm::paginate(10);
            return view('musgravegroup.admin.pages.company', compact('forms'));
        } catch (\Exception $e) {
            Log::error('Error retrieving career forms: ' . $e->getMessage());
            return redirect()->back()->withErrors('Failed to retrieve career forms.');
        }
    }

    public function supplied()
    {
        try {
            $users = UserSupplier::paginate(10);
            return view('musgravegroup.admin.pages.supplied', compact('users'));
        } catch (\Exception $e) {
            Log::error('Error retrieving career forms: ' . $e->getMessage());
            return redirect()->back()->withErrors('Failed to retrieve user suppliers.');
        }
    }

    public function suppliedDestroy ($id)
    {
        try {
            $supplier = UserSupplier::find($id);
            if ($supplier) {
                $supplier->delete();
                return redirect()->back()->with('status', 'Success delete');
            }
        } catch (\Exception $e) {
            Log::error('Error retrieving supplied form: ' . $e->getMessage());
            return redirect()->back()->withErrors('Failed to retrieve supplied form.');
        }
    }

    public function destroy($id)
    {
        try {
            $applied = UserApplied::find($id);
            if ($applied) {
                $applied->delete();
                return redirect()->back()->with('status', 'Success delete');
            }
        } catch (\Exception $e) {
            Log::error('Error retrieving career forms: ' . $e->getMessage());
            return redirect()->back()->withErrors('Failed to retrieve career forms.');
        }
    }
}

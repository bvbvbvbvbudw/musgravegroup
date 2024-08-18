<?php

namespace App\Http\Controllers\Admin;

use App\Events\VacancyCreated;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreVacancyRequest;
use App\Models\CareerForm;
use App\Models\UserApplied;
use App\Models\Vacancy;
use App\Models\VacancyCategory;
use App\Models\VacancyContent;
use App\Models\VacancyLocation;
use App\Traits\HandlesStatus;
use App\Traits\UploadFileTrait;
use Illuminate\Support\Facades\Storage;

class AdminUsersAppliedController extends Controller
{
    public function index()
    {
        $users = UserApplied::all();
        return view('musgravegroup.admin.pages.applieds', compact('users'));
    }

    public function form()
    {
        $forms = CareerForm::all();
        return view('musgravegroup.admin.pages.company', compact('forms'));
    }
}

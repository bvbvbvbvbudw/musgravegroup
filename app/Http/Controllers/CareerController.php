<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Vacancy;
use App\Traits\NewsDate;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class CareerController extends Controller
{
    use NewsDate;
    public function index()
    {
        return view('musgravegroup.pages.careers.careers');
    }

    public function show($url)
    {
        $vacancy = Vacancy::where('url', $url)->first();
        if($vacancy) return view('musgravegroup.pages.careers.single', compact('vacancy'));
    }
    public function apply ($id)
    {
        return view('musgravegroup.pages.careers.apply', compact('id'));
    }

    public function working()
    {
        return view('musgravegroup.pages.careers.working');
    }

    public function sectors()
    {
        return view('musgravegroup.pages.careers.sectors');
    }
    public function current()
    {
        $vacancies = Cache::remember("vacancies_data_page", now()->addHour(), function(){
            return Vacancy::all();
        });
        $vacancies = $this->addFormattedDate($vacancies);
        return view('musgravegroup.pages.careers.current', compact('vacancies'));
    }
}

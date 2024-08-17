<?php

namespace App\Http\Controllers;

use App\Models\UserSender;
use App\Models\Vacancy;
use App\Models\VacancyCategory;
use App\Models\VacancyLocation;
use App\Traits\NewsDate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class CareerController extends Controller
{
    use NewsDate;

    public function index()
    {
        return view('musgravegroup.pages.careers.careers');
    }

    public function alerts()
    {
        $categories = VacancyCategory::all();
        $locations = VacancyLocation::all();
        return view('musgravegroup.pages.emailAlerts', compact('categories', 'locations'));
    }

    public function send(Request $request)
    {
//        $validatedData = $request->validate([
//            'title' => 'required|string',
//            'firstName' => 'required|string',
//            'secondName' => 'required|string',
//            'mobileTelephone' => 'required|string',
//            'applicantEmail' => 'required|email',
//            'criteria1' => 'array',
//            'criteria1.*' => 'integer',
//            'criteria2' => 'array',
//            'criteria2.*' => 'integer',
//        ]);
        $validatedData = $request->all();
        $preferredCategories = array_map('intval', $validatedData['criteria1']);
        $preferredLocations = array_map('intval', $validatedData['criteria2']);
        UserSender::create([
            'title' => $validatedData['title'],
            'forenames' => $validatedData['firstName'],
            'surname' => $validatedData['secondName'],
            'telephone' => $validatedData['mobileTelephone'],
            'email' => $validatedData['applicantEmail'],
            'preferred_categories' => $preferredCategories,
            'preferred_locations' => $preferredLocations,
        ]);
        Log::info('User saved successfully');
        return redirect()->back()->with('status', 'Email alerts saved successfully.');
    }


    public function show($url)
    {
        $vacancy = Vacancy::where('url', $url)->first();
        if ($vacancy) return view('musgravegroup.pages.careers.single', compact('vacancy'));
    }

    public function apply($id)
    {
        return view('musgravegroup.pages.careers.apply', compact('id'));
    }

    public function supply()
    {
        return view('musgravegroup.pages.careers.sectors.supply-chain');
    }

    public function sales()
    {
        return view('musgravegroup.pages.careers.sectors.sales');
    }

    public function technology()
    {
        return view('musgravegroup.pages.careers.sectors.technology');
    }

    public function commercial()
    {
        return view('musgravegroup.pages.careers.sectors.comm');
    }

    public function finance()
    {
        return view('musgravegroup.pages.careers.sectors.finance');
    }

    public function graduates()
    {
        return view('musgravegroup.pages.careers.sectors.gradu');
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
        $vacancies = Cache::remember("vacancies_data_page", now()->addHour(), function () {
            return Vacancy::where('is_closed', 0)->get();
        });
        if ($vacancies) {
            $vacancies = $this->addFormattedDate($vacancies);
            return view('musgravegroup.pages.careers.current', compact('vacancies'));
        }
    }
}

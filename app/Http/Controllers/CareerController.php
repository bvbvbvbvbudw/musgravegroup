<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use App\Traits\NewsDate;
use Illuminate\Support\Facades\Cache;

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
            return Vacancy::where('is_closed', 0);
        });
        $vacancies = $this->addFormattedDate($vacancies);
        return view('musgravegroup.pages.careers.current', compact('vacancies'));
    }
}

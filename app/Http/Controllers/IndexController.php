<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Support\Facades\Cache;

class IndexController extends Controller
{
    public function index()
    {
        $brands = Cache::remember("brands_page_data", now()->addHours(1), function () {
            return Brand::all();
        });
        return view('musgravegroup.pages.index', compact('brands'));
    }

    public function local()
    {
        return view('musgravegroup.pages.irish');
    }

    public function mood()
    {
        return view('musgravegroup.pages.mood');
    }

    public function pizza()
    {
        return view('musgravegroup.pages.pizza');
    }

    public function kitchen()
    {
        return view('musgravegroup.pages.kitchen');
    }

    public function cookie()
    {
        return view('musgravegroup.pages.cookie');
    }

    public function privacy()
    {
        return view('musgravegroup.pages.privacy');
    }

    public function terms()
    {
        return view('musgravegroup.pages.terms');
    }

    public function anti()
    {
        return view('musgravegroup.pages.anti');
    }

    public function food()
    {
        return view('musgravegroup.pages.food-academy');
    }
}

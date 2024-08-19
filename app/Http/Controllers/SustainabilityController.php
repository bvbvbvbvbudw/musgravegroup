<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Report;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class SustainabilityController extends Controller
{
    public function index()
    {
        $reports = Cache::remember("reports_data", now()->addHour(1), function(){
            return Report::where('status', 'approved')->get();
        });
        return view('musgravegroup.pages.sustainability.sustainability', compact('reports'));
    }

    public function carring()
    {
        return view('musgravegroup.pages.sustainability.carring');
    }

    public function vibrant()
    {
        return view('musgravegroup.pages.sustainability.vibrant');
    }

    public function source()
    {
        return view('musgravegroup.pages.sustainability.source');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class SustainabilityController extends Controller
{
    public function index()
    {
        return view('musgravegroup.pages.sustainability.sustainability');
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

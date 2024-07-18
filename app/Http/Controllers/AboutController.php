<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class AboutController extends Controller
{
    public function index()
    {
        return view('musgravegroup.pages.about.about');
    }
    public function partners ()
    {
        return view('musgravegroup.pages.about.partners');
    }
    public function food ()
    {
        return view('musgravegroup.pages.about.food');
    }
    public function board ()
    {
        return view('musgravegroup.pages.about.board');
    }
    public function annual ()
    {
        return view('musgravegroup.pages.about.annual');
    }
    public function podcasts ()
    {
        return view('musgravegroup.pages.about.podcasts');
    }
}

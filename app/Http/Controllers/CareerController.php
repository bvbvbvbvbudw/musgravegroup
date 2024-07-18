<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class CareerController extends Controller
{
    public function index()
    {
        return view('musgravegroup.pages.careers.careers');
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
        return view('musgravegroup.pages.careers.current');
    }
}

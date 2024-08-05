<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Brand;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Cache::remember("brands_page_data", now()->addHours(1), function(){
            return Brand::all();
        });
        return view('musgravegroup.pages.brands', compact('brands'));
    }
}

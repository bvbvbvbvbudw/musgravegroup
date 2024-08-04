<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\News;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class NewsController extends Controller
{
    public function index()
    {
        return view('musgravegroup.pages.news.news');
    }

    public function musgrave()
    {
        return view('musgravegroup.pages.news.musgrave');
    }

    public function press()
    {
        return view('musgravegroup.pages.news.press');
    }

    public function contacts()
    {
        return view('musgravegroup.pages.news.contacts');
    }

    public function show($url)
    {
        $news = News::firstWhere('url', $url)->first();
        if($news){
            return view('musgravegroup.pages.news.single', compact('news'));
        }
    }
}

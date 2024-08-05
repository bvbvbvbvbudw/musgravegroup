<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\News;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class NewsController extends Controller
{
    public function index()
    {
        $news = Cache::remember('news_page_data', now()->addHours(1), function(){
            return News::with('media', 'content')->get();
        });
        return view('musgravegroup.pages.news.news', compact('news'));
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

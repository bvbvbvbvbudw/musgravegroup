<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Brand;
use App\Models\News;
use App\Models\NewsSustainability;
use App\Traits\NewsDate;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class NewsController extends Controller
{
    use NewsDate;
    public function index()
    {
        $news = Cache::remember('news_page_data', now()->addHours(1), function(){
            return News::with('media', 'content')->get();
        });
        $brands = Cache::remember('brands_news_page_data', now()->addHours(1), function(){
            return Brand::all();
        });
        return view('musgravegroup.pages.news.news', compact('news', 'brands'));
    }

    public function sustainability ()
    {
        return view('musgravegroup.pages.news.sustainability');
    }
    public function sustainabilityShow($url)
    {
        $news = NewsSustainability::whereHas('content', function($query) {
            $query->where('is_standard', 0);
        })->where('url', $url)->first();
        if ($news) {
            $news = $this->addFormattedDate($news);
            return view('musgravegroup.pages.sustainability.single', compact('news'));
        }

//        return redirect()->route('page.index');
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

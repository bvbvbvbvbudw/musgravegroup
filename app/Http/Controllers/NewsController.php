<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\News;
use App\Models\NewsSustainability;
use App\Traits\NewsDate;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class NewsController extends Controller
{
    use NewsDate;

    public function index()
    {
        $news = Cache::remember('news_page_data', now()->addHours(1), function () {
            return News::with('media', 'content')->get();
        });

        $brands = Cache::remember('brands_news_page_data', now()->addHours(1), function () {
            return Brand::all();
        });

        $dates = News::selectRaw('YEAR(created_at) as year, MONTH(created_at) as month')
            ->orderBy('year', 'desc')
            ->orderBy('month', 'desc')
            ->distinct()
            ->get()
            ->groupBy('year');

        return view('musgravegroup.pages.news.news', compact('news', 'brands', 'dates'));
    }

    public function filterByDate($year, $month)
    {
        $news = Cache::remember("news_page_data_{$year}_{$month}", now()->addHours(1), function () use ($year, $month) {
            return News::with('media', 'content')
                ->whereYear('created_at', $year)
                ->whereMonth('created_at', $month)
                ->get();
        });

        $brands = Cache::remember('brands_news_page_data', now()->addHours(1), function () {
            return Brand::all();
        });

        $dates = News::selectRaw('YEAR(created_at) as year, MONTH(created_at) as month')
            ->orderBy('year', 'desc')
            ->orderBy('month', 'desc')
            ->distinct()
            ->get()
            ->groupBy('year');

        return view('musgravegroup.pages.news.news', compact('news', 'brands', 'dates'));
    }

    public function filterByBrand($brand)
    {
        $brand = Brand::where('url', $brand)->firstOrFail();
        $news = Cache::remember("news_page_data_brand_{$brand->id}", now()->addHours(1), function () use ($brand) {
            return News::with('media', 'content')
                ->where('brand_id', $brand->id)
                ->get();
        });

        $brands = Cache::remember('brands_news_page_data', now()->addHours(1), function () {
            return Brand::all();
        });

        $dates = News::selectRaw('YEAR(created_at) as year, MONTH(created_at) as month')
            ->orderBy('year', 'desc')
            ->orderBy('month', 'desc')
            ->distinct()
            ->get()
            ->groupBy('year');

        return view('musgravegroup.pages.news.news', compact('news', 'brands', 'dates'));
    }


    public function sustainability()
    {
        return view('musgravegroup.pages.news.sustainability');
    }

    public function sustainabilityShow($url)
    {
        $news = NewsSustainability::whereHas('content', function ($query) {
            $query->where('is_standard', 0);
        })->where('url', $url)->where('status', 'approved')->first();
        $newsSus = NewsSustainability::where('status', 'approved')->get();
        if ($news) {
            $news = $this->addFormattedDate($news);
            return view('musgravegroup.pages.sustainability.single', compact('news', 'newsSus'));
        }

        return redirect()->route('page.index');
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
        if ($news) {
            return view('musgravegroup.pages.news.single', compact('news'));
        }
    }
}

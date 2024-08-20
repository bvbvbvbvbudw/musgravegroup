<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\News;
use App\Models\NewsSustainability;
use App\Traits\NewsDate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class NewsController extends Controller
{
    use NewsDate;
    protected function getBrands()
    {
        return Cache::remember('brands_news_page_data', now()->addDays(1), function () {
            return Brand::where('status', 'approved')->get();
        });
    }

    protected function getDates()
    {
        return Cache::remember('news_dates', now()->addDays(1), function () {
            return News::selectRaw('YEAR(created_at) as year, MONTH(created_at) as month')
                ->orderBy('year', 'desc')
                ->orderBy('month', 'desc')
                ->distinct()
                ->get()
                ->groupBy('year');
        });
    }

    public function index(Request $request)
    {
        try {
            $page = $request->input('page', 1);
            $cacheKey = "news_page_data_page_{$page}";

            $news = Cache::remember($cacheKey, now()->addHours(1), function () {
                return News::with('media', 'content')
                    ->where('status', 'approved')
                    ->paginate(10);
            });

            $brands = $this->getBrands();
            $dates = $this->getDates();
            $news->getCollection()->transform(function ($item) {
                $item->formatted_date = $item->created_at->format('d-m-Y');
                return $item;
            });

            return view('musgravegroup.pages.news.news', compact('news', 'brands', 'dates'));
        } catch (\Exception $e) {
            Log::error('Error fetching news index: ' . $e->getMessage());
            return redirect()->back()->withErrors('Failed to load news.');
        }
    }

    public function filterByDate($year, $month, Request $request)
    {
        try {
            $page = $request->input('page', 1);
            $cacheKey = "news_page_data_{$year}_{$month}_page_{$page}";

            $news = Cache::remember($cacheKey, now()->addHours(1), function () use ($year, $month) {
                return News::with('media', 'content')
                    ->whereYear('created_at', $year)
                    ->whereMonth('created_at', $month)
                    ->where('status', 'approved')
                    ->paginate(10);
            });

            $brands = $this->getBrands();
            $dates = $this->getDates();

            return view('musgravegroup.pages.news.news', compact('news', 'brands', 'dates'));
        } catch (\Exception $e) {
            Log::error("Error filtering news by date: {$year}-{$month}, error: " . $e->getMessage());
            return redirect()->back()->withErrors('Failed to load filtered news.');
        }
    }

    public function filterByBrand($brandUrl, Request $request)
    {
        try {
            $brand = Brand::where('url', $brandUrl)->firstOrFail();
            $page = $request->input('page', 1);
            $cacheKey = "news_page_data_brand_{$brand->id}_page_{$page}";

            $news = Cache::remember($cacheKey, now()->addHours(1), function () use ($brand) {
                return News::with('media', 'content')
                    ->where('brand_id', $brand->id)
                    ->where('status', 'approved')
                    ->paginate(10);
            });

            $brands = $this->getBrands();
            $dates = $this->getDates();

            return view('musgravegroup.pages.news.news', compact('news', 'brands', 'dates'));
        } catch (\Exception $e) {
            Log::error("Error filtering news by brand: {$brandUrl}, error: " . $e->getMessage());
            return redirect()->back()->withErrors('Failed to load news for the selected brand.');
        }
    }

    public function sustainability()
    {
        return view('musgravegroup.pages.news.sustainability');
    }

    public function sustainabilityShow($url)
    {
        try {
            $news = NewsSustainability::whereHas('content', function ($query) {
                $query->where('is_standard', 0);
            })->where('url', $url)->where('status', 'approved')->first();

            if ($news) {
                $newsSus = NewsSustainability::where('status', 'approved')->get();
                $news = $this->addFormattedDate($news);
                return view('musgravegroup.pages.sustainability.single', compact('news', 'newsSus'));
            }

            return redirect()->route('page.index');
        } catch (\Exception $e) {
            Log::error('Error showing sustainability news: ' . $e->getMessage());
            return redirect()->back()->withErrors('Failed to load sustainability news.');
        }
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
        try {
            $news = News::where('url', $url)->where('status', 'approved')->first();
            if ($news) {
                return view('musgravegroup.pages.news.single', compact('news'));
            }
            return redirect()->route('page.index');
        } catch (\Exception $e) {
            Log::error('Error showing news: ' . $e->getMessage());
            return redirect()->back()->withErrors('Failed to load the selected news.');
        }
    }
}

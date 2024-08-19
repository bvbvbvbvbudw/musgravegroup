<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class AboutController extends Controller
{
    public function index()
    {
        return view('musgravegroup.pages.about.about');
    }

    public function partners()
    {
        return view('musgravegroup.pages.about.partners');
    }

    public function food()
    {
        return view('musgravegroup.pages.about.food');
    }

    public function board()
    {
        return view('musgravegroup.pages.about.board');
    }

    public function annual()
    {
        return view('musgravegroup.pages.about.annual');
    }

    public function directors()
    {
        return view('musgravegroup.pages.about.directors');
    }

    public function podcasts(Request $request)
    {
        $page = $request->input('page', 1);

        try {
            $cacheKey = "podcasts_data_page_{$page}";

            $podcasts = Cache::remember($cacheKey, now()->addHours(1), function () use ($page) {
                return Podcast::where('status', 'approved')->paginate(10);
            });
            return view('musgravegroup.pages.about.podcasts', compact('podcasts'));
        } catch (\Exception $e) {
            Log::error('Error fetching podcasts: ' . $e->getMessage());
            return redirect()->back()->withErrors('Failed to load podcasts.');
        }
    }



    public function showPodcast($url)
    {
        try {
            $podcast = Podcast::where('url', $url)->firstOrFail();
            return view('musgravegroup.pages.about.podcast-single', compact('podcast'));
        } catch (\Exception $e) {
            Log::error('Error fetching podcast: ' . $e->getMessage());
            return redirect()->back()->withErrors('Podcast not found.');
        }
    }
}

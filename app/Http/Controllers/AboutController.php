<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Podcast;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
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

    public function directors()
    {
        return view('musgravegroup.pages.about.directors');
    }
    public function podcasts ()
    {
        $podcasts = Cache::remember('podcasts_data', now()->addHours(1), function(){
            return Podcast::all();
        });
        return view('musgravegroup.pages.about.podcasts', compact('podcasts'));
    }

    public function showPodcast ($url)
    {
        $podcast = Podcast::firstWhere('url', $url)->first();
        if($podcast) return view('musgravegroup.pages.about.podcast-single', compact('podcast'));
    }
}

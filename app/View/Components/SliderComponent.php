<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\News;
use Illuminate\Support\Facades\Cache;

class SliderComponent extends Component
{
    public $news;

    public function __construct()
    {
        $this->news = Cache::remember('news_component_data', now()->addMinutes(10), function () {
            return News::with(['media', 'content'])->latest()->get();
        });
    }

    public function render()
    {
        return view('musgravegroup.components.news.slider');
    }
}

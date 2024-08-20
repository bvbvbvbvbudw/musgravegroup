<?php

namespace App\View\Components;

use App\Traits\NewsDate;
use Illuminate\View\Component;
use App\Models\News;
use Illuminate\Support\Facades\Cache;

class SliderComponent extends Component
{
    use NewsDate;
    public $news;

    public function __construct()
    {
        $this->news = Cache::remember('news_component_data', now()->addMinutes(10), function () {
            return News::with(['media', 'content'])->where('status', 'approved')->latest()->take(10)->get();
        });
        $this->news = $this->addFormattedDate($this->news);
    }

    public function render()
    {
        return view('musgravegroup.components.news.slider');
    }
}

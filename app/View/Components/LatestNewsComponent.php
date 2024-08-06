<?php

namespace App\View\Components;

use App\Traits\NewsDate;
use Illuminate\View\Component;
use App\Models\News;
use Illuminate\Support\Facades\Cache;

class LatestNewsComponent extends Component
{
    use NewsDate;

    public $news;

    public function __construct()
    {
        $this->news = Cache::remember('news_component_data', now()->addMinutes(10), function () {
            return News::with(['media', 'content'])->latest()->get();
        });
        $this->news = $this->addFormattedDate($this->news);
    }

    public function render()
    {
        return view('musgravegroup.components.news.latest', ['news' => $this->news]);
    }
}

<?php

namespace App\View\Components;

use App\Models\NewsSustainability;
use App\Traits\NewsDate;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Cache;

class NewsSustainabilityComponent extends Component
{
    use NewsDate;
    public $news;

    public function __construct()
    {
        $this->news = Cache::remember('news_sustainability_component_data', now()->addMinutes(10), function () {
            return NewsSustainability::with(['media', 'content'])->latest()->get();
        });
        $this->news = $this->addFormattedDate($this->news);
    }

    public function render()
    {
        return view('musgravegroup.components.news.latest_sustainability');
    }
}

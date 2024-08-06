<?php

namespace App\Traits;

use Carbon\Carbon;

trait NewsDate
{
    public function addFormattedDate($news)
    {
        if ($news instanceof \Illuminate\Support\Collection) {
            return $news->map(function ($newsItem) {
                $newsItem->formatted_date = Carbon::parse($newsItem->created_at)->format('j F Y');
                return $newsItem;
            });
        } else {
            $suffix = "th";
            $news->formatted_date = Carbon::parse($news->created_at)->format("j F Y"); // TODO: make suffix "th"
            return $news;
        }
    }
}

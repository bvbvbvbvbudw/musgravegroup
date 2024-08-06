<?php

namespace App\Traits;

use Carbon\Carbon;

trait NewsDate
{
    public function addFormattedDate($newsCollection)
    {
        return $newsCollection->map(function ($news) {
            $news->formatted_date = Carbon::parse($news->created_at)->format('d M Y');
            return $news;
        });
    }
}

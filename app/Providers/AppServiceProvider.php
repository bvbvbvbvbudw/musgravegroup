<?php

namespace App\Providers;

use App\View\Components\LatestNewsComponent;
use App\View\Components\NewsComponent;
use App\View\Components\SliderComponent;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::component('news', NewsComponent::class);
        Blade::component('slider', SliderComponent::class);
        Blade::component('latest-news', LatestNewsComponent::class);
    }
}

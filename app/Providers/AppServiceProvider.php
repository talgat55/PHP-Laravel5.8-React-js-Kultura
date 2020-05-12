<?php

namespace App\Providers;

use App\Observers\GalleryObserver;
use Illuminate\Support\ServiceProvider;
use App\News;
use App\Gallery;
use App\Place;
use App\Afisha;
use App\Observers\NewsObserver;
use App\Observers\PlaceObserver;
use App\Observers\AfishaObserver;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        News::observe(NewsObserver::class);
        Gallery::observe(GalleryObserver::class);
        Place::observe(PlaceObserver::class);
        Afisha::observe(AfishaObserver::class);
    }
}

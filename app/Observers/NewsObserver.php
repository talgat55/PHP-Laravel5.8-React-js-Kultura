<?php

namespace App\Observers;

use App\News;
use Illuminate\Support\Str;

class NewsObserver
{
    /**
     * Handle the news "created" event.
     *
     * @param  \App\News $news
     * @return void
     */
    public function created(News $news)
    {
        $slug = Str::slug($news->name, '-');
        $news->slug = $slug;

    }
    /**
     * Handle the news "created" event.
     *
     * @param  \App\News $news
     * @return void
     */
    public function creating(News $news)
    {
        $slug = Str::slug($news->name, '-');
        $news->slug = $slug;

    }

    /**
     * Handle the news "updated" event.
     *
     * @param  \App\News $news
     * @return void
     */
    public function updating(News $news)
    {
        $slug = Str::slug($news->name, '-');
        $news->slug = $slug;
    }

    /**
     * Handle the news "deleted" event.
     *
     * @param  \App\News $news
     * @return void
     */
    public function deleted(News $news)
    {
        //
    }

    /**
     * Handle the news "restored" event.
     *
     * @param  \App\News $news
     * @return void
     */
    public function restored(News $news)
    {
        //
    }

    /**
     * Handle the news "force deleted" event.
     *
     * @param  \App\News $news
     * @return void
     */
    public function forceDeleted(News $news)
    {
        //
    }
}

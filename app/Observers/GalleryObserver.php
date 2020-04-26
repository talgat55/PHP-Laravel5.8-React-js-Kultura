<?php

namespace App\Observers;
use App\Gallery;
use Illuminate\Support\Str;
class GalleryObserver
{
    /**
     * Handle the news "created" event.
     *
     * @param  \App\News $news
     * @return void
     */
    public function creating(Gallery $gallery)
    {
        $slug = Str::slug($gallery->name, '-');
        $gallery->slug = $slug;

    }

}

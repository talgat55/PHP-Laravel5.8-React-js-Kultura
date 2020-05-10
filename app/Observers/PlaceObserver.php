<?php

namespace App\Observers;
use Illuminate\Support\Str;
use App\Place;

class PlaceObserver
{
    /**
     * Handle the news "created" event.
     *
     * @param  \App\Place $place
     * @return void
     */
    public function creating(Place $place)
    {
        $slug = Str::slug($place->name, '-');
        $place->slug = $slug;

    }

    /**
     * Handle the  "updated" event.
     *
     * @param  \App\Place $place
     * @return void
     */
    public function updating(Place $place)
    {
        $slug = Str::slug($place->name, '-');
        $place->slug = $slug;
    }
}

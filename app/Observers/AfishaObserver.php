<?php

namespace App\Observers;
use Illuminate\Support\Str;
use App\Afisha;
class AfishaObserver
{
    /**
     * Handle the  item "created" event.
     *
     * @param  \App\Afisha $item
     * @return void
     */
    public function creating(Afisha $item)
    {
        $slug = Str::slug($item->name, '-');
        $item->slug = $slug;

    }

    /**
     * Handle the  "updated" event.
     *
     * @param  \App\Afisha $item
     * @return void
     */
    public function updating(Afisha $item)
    {
        $slug = Str::slug($item->name, '-');
        $item->slug = $slug;
    }

}

<?php

namespace App\Observers;
use Illuminate\Support\Str;
use App\CultureDetails;
class CultureDetailsObserver
{
    /**
     * Handle the CultureDetails "created" event.
     *
     * @param  \App\CultureDetails $cultureDetails
     * @return void
     */
    public function creating(CultureDetails $cultureDetails)
    {
        $slug = Str::slug($cultureDetails->name, '-');
        $cultureDetails->slug = $slug;

    }

    /**
     * Handle the  "updated" event.
     *
     * @param  \App\CultureDetails $cultureDetails
     * @return void
     */
    public function updating(CultureDetails $cultureDetails)
    {
        $slug = Str::slug($cultureDetails->name, '-');
        $cultureDetails->slug = $slug;
    }
}

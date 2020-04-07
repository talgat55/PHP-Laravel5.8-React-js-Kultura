<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeSlider extends Model
{
    protected $table = 'home_sliders';
    protected $fillable = [
        'name',
        'url',
        'text',
        'link',
        'date',
        'sort',
        'status',
        'name_place'
    ];



    /*
     *  Return active sliders
     */
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}

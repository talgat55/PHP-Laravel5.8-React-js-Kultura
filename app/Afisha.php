<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Afisha extends Model
{
    protected $table = 'afisha';

    protected $fillable = [
        'name',
        'text',
        'image',
        'age_limit',
        'duration',
        'date_time_launch',
        'place_id',
        'sort',
        'status',
    ];


    function scopeActiveWithPlaces($query){
        return $query->where('status', 1)->with('places') ->paginate('50');
    }


    public function places()
    {
        return $this->belongsTo('App\Place', 'place_id', 'id');
    }
}

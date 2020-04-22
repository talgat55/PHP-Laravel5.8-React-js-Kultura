<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
class Afisha extends Model
{
    use Searchable;
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

    function scopeActiveWithPlacesRelated($query){
        return $query
            ->where('status', 1)
            ->with('places')
            ->orderBy('created_at', 'desc')
            ->limit(8)
            ->get();
    }




    public function places()
    {
        return $this->belongsTo('App\Place', 'place_id', 'id');
    }
}

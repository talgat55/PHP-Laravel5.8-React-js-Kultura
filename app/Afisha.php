<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Afisha extends Model
{
    use Searchable;
    protected $table = 'afisha';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'text',
        'image',
        'age_limit',
        'duration',
        'date_time_launch',
        'place_id',
        'sort',
        'slug',
        'status',
    ];

    /*
     * Get active items  with pagination
     */
    function scopeActiveWithPlaces($query)
    {
        return $query->where('status', 1)->with('places')->paginate('50');
    }

    /*
     * Get related items for block
     */
    function scopeActiveWithPlacesRelated($query)
    {
        return $query
            ->where('status', 1)
            ->with('places')
            ->orderBy('created_at', 'desc')
            ->limit(8)
            ->get();
    }

    /*
     * Get related items for page afisha
     */
    function scopeActiveWithPlacesRelatedPage($query)
    {
        return $query
            ->where('status', 1)
            ->with('places')
            ->orderBy('created_at', 'desc')
            ->limit(12)
            ->get();
    }


    /*
     * Relation with Place model
     */
    public function places()
    {
        return $this->belongsTo('App\Place', 'place_id', 'id');
    }
}

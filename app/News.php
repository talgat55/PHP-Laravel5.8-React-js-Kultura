<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class News extends Model
{
    use Searchable;
    protected $table = 'news';

    protected $fillable = [
        'name',
        'text',
        'image',
        'slug',
        'anons',
        'publish_date',
        'sort',
        'status',
    ];


    /*
     * Get Related news
     */
    function scopeActiveWithPlacesRelated($query)
    {
        return $query
            ->select('name', 'image', 'slug', 'anons', 'publish_date')
            ->where('status', 1)
            ->orderBy('created_at', 'desc')
            ->limit(8)
            ->get();
    }
    /*
    *  With pagination
    */
    function scopeActiveWithPagination($query)
    {
        return $query->where('status', 1)->paginate('12');
    }
    /*
    * Get active items  by slug
    */
    function scopeActiveDetailBySlug($query, $slug)
    {
        return $query->where('status', 1)->where('slug', $slug)->get();
    }

}

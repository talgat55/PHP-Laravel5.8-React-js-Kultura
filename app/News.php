<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
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
     *
     */
    function scopeActiveWithPlacesRelated($query){
        return $query
            ->select('name', 'image', 'slug' ,'anons' , 'publish_date')
            ->where('status', 1)
            ->orderBy('created_at', 'desc')
            ->limit(8)
            ->get();
    }
    function scopeActiveWithPagination($query){
        return $query->where('status', 1)->paginate('12');
    }
}

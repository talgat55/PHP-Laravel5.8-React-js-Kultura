<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'gallery';

    protected $fillable = [
        'name',
        'slug',
        'images',
        'description',
        'sort',
        'status',
    ];


    /*
 * Return list active items  with paginate
 */
    function scopeActiveWithPaginate($query){
        return $query->where('status', 1)->paginate('50');
    }

    /*
    * Get related items for page with pagination
    */
    function scopeActiveWithPage($query)
    {
        return $query
            ->where('status', 1)
            ->orderBy('created_at', 'desc')
            ->limit(12)
            ->get();
    }



}

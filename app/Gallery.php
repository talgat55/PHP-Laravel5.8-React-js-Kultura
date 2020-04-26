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
}

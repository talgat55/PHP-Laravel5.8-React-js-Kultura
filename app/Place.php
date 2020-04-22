<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
class Place extends Model
{
    use Searchable;
    protected $table = 'places';



    protected $fillable = [
        'name',
        'image',
        'address',
        'phone',
        'status',
        'sort',
        'web_site_link',
        'text',
        'category_place_id',
    ];
}

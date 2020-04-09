<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
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

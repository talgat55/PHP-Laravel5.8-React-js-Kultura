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

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banners extends Model
{
    protected $table = 'banners';

    protected $fillable = [
        'name',
        'link',
        'image',
        'page',
        'sort',
        'status',
    ];

    /*
     * Return all list page to  place banner
     */
    static function Pages(){
        return [
            'home_one' => 'На главной 1',
            'home_two' => 'На главной 2',
            'news' => 'На странице Новостей',
            'gallery' => 'На странице Галереи',
            'culture_details' => 'На странице Культуры в деталях',
        ];
    }

}

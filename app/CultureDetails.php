<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CultureDetails extends Model
{
    protected $table = 'culture_details';

    protected $fillable = [
        'name',
        'text',
        'image',
        'category',
        'anons',
        'sort',
        'status',
    ];


    /*
     * Return lists category
     */
    static function categories(){
        return [
            '1' => 'Интервью',
            '2' => 'Очерк',
            '3' => 'Рецензия',
            '4' => 'Спецпроект',
        ];
    }

    /*
     * Return list active items  with paginate
     */
    function scopeActiveWithPaginate($query){
        return $query->where('status', 1)->paginate('50');
    }

}

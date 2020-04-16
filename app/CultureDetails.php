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

    /*
     * Return last  3 items    sort by Date
     */
    function scopeActiveWithPlacesRelated($query){
        return $query
            ->select('name','anons', 'image')
            ->where('status', 1)
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class CultureDetails extends Model
{
    use Searchable;
    protected $table = 'culture_details';

    protected $fillable = [
        'name',
        'text',
        'image',
        'category',
        'anons',
        'sort',
        'slug',
        'status',
    ];


    /*
     * Return lists category
     */
    static function categories()
    {
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
    function scopeActiveWithPaginate($query)
    {
        return $query->where('status', 1)->paginate('50');
    }

    /*
     * Return last  3 items    sort by Date
     */
    function scopeActiveWithPlacesRelated($query)
    {
        return $query
            ->select('name', 'anons', 'image')
            ->where('status', 1)
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();
    }


     /*
     * Get related items for page with pagination
     */
    function scopeActiveWithPagination($query)
    {
        return $query
            ->where('status', 1)
            ->orderBy('created_at', 'desc')
            ->limit(12)
            ->get();
    }

    /*
    * Get active items  by slug
    */
    function scopeActiveDetailBySlug($query, $slug)
    {
        return $query->where('status', 1)->where('slug', $slug)->get();
    }



}

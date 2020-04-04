<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    protected $table = 'table_menus';

    protected $fillable = [
        'name',
        'id',
        'link',
        'custom_name_class',
        'parent',
        'status',
        'sort',

    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Afisha extends Model
{
    protected $table = 'afisha';

    protected $fillable = [
        'name',
        'text',
        'image',
        'age_limit',
        'duration',
        'date_time_launch',
        'place_id',
    ];
}

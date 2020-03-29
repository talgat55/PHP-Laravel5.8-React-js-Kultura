<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThemeSettings extends Model
{
    protected $table = 'theme_settings';

    protected $fillable = [
        'logo_url',
        'about_info',
        'soc_link_vk',
        'soc_link_fb',
        'soc_link_inst',
        'soc_link_telegram'
    ];
}

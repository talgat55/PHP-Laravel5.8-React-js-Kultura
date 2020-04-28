<?php

namespace App\Http\Controllers\Api;

use App\ThemeSettings;
use App\Http\Controllers\Controller;
class ApiSettingsThemeController extends Controller
{
    /**
     *  get Settings theme
     *
     * @return \Illuminate\View\View
     */
    public function get()
    {
        $item = ThemeSettings::find(1);
        return response()
            ->json($item);
    }

}

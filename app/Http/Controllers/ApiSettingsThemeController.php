<?php

namespace App\Http\Controllers;

use App\ThemeSettings;

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

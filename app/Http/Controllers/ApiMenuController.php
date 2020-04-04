<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menus;

class ApiMenuController extends Controller
{
    /**
     *  get Menu
     *
     * @return \Illuminate\View\View
     */
    public function get()
    {
        $item = Menus::all();
        return response()
            ->json($item);
    }

}

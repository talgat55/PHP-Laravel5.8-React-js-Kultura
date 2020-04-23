<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;
class ApiPlaceController extends Controller
{
    /**
     *  get  last items
     *
     * @return \Illuminate\View\View
     */
    public function getRelated()
    {
        $item = Place::activeRelated();
        return response()
            ->json($item);
    }
}

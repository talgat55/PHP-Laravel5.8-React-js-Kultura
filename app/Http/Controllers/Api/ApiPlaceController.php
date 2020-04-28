<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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

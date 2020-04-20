<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
class ApiNewsController extends Controller
{
    /**
     *  get  last items
     *
     * @return \Illuminate\View\View
     */
    public function getRelated()
    {
        $item = News::activeWithPlacesRelated();
        return response()
            ->json($item);
    }
}

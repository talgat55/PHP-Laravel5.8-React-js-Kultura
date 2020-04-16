<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CultureDetails;
class ApiCultureDetailsController extends Controller
{
    /**
     *  get Menu
     *
     * @return \Illuminate\View\View
     */
    public function getRelated()
    {
        $item = CultureDetails::activeWithPlacesRelated();
        return response()
            ->json($item);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Afisha;
class ApiAfishaController extends Controller
{
    /**
     *  get  last items
     *
     * @return \Illuminate\View\View
     */
    public function getRelated()
    {
        $item = Afisha::activeWithPlacesRelated();
        return response()
            ->json($item);
    }

     /**
     *  get  last items for page
     *
     * @return \Illuminate\View\View
     */
    public function getRelatedPage()
    {
        $item = Afisha::activeWithPlacesRelatedPage();
        return response()
            ->json($item);
    }



}

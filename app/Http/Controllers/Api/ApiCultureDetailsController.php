<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CultureDetails;
class ApiCultureDetailsController extends Controller
{
    /**
     *  get Latest
     *
     * @return \Illuminate\View\View
     */
    public function getRelated()
    {
        $item = CultureDetails::activeWithPlacesRelated();
        return response()
            ->json($item);
    }

    /**
     *  get with pagination for page
     *
     * @return \Illuminate\View\View
     */
    public function getPage()
    {
        $item = CultureDetails::activeWithPagination();
        return response()
            ->json($item);
    }



}

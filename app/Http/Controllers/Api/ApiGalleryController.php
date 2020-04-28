<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Gallery;
class ApiGalleryController extends Controller
{

    /**
     *  get  last items for page
     *
     * @return \Illuminate\View\View
     */
    public function getPage()
    {
        $item = Gallery::activeWithPage();
        return response()
            ->json($item);
    }

}

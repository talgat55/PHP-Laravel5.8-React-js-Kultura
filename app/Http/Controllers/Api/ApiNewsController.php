<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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

      /**
     *  get   news items  with pagination
     *
     * @return \Illuminate\View\View
     */
    public function getWithPage()
    {
        $item = News::activeWithPagination();
        return response()
            ->json($item);
    }



}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banners;
class ApiBannerController extends Controller
{
    /**
     *  get Banner by page
     *
     * @return \Illuminate\View\View
     */
    public function get($page)
    {
        if(!empty($page)){
            $item = Banners::getByPage($page);
        }else{
            $item = [];
        }

        return response()
            ->json($item);
    }
}

<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
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

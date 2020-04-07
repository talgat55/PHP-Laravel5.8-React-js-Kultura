<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomeSlider;
class ApiHomeSliderController extends Controller
{
    /**
     *  get Menu
     *
     * @return \Illuminate\View\View
     */
    public function get()
    {
        $item = HomeSlider::active()->get();
        return response()
            ->json($item);
    }
}

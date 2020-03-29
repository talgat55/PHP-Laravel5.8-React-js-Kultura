<?php

namespace App\Http\Controllers;

use App\HomeSlider;

class HomeSliderController extends Controller
{

    /**
     * Show the list items Home slider
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $items = HomeSlider::paginate('50');
        return view('homeSlider.index',compact('items'));
    }

    /**
     * Show the form for creating a new item.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('homeSlider.create');
    }
}

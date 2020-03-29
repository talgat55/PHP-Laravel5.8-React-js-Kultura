<?php

namespace App\Http\Controllers;

use App\HomeSlider;
use Illuminate\Http\Request;

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
        return view('homeSlider.index', compact('items'));
    }

    /**
     * Show the form for creating a new item.
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $model = HomeSlider::create($request->all());
            $model->save();
            return redirect()->route('homeSliderIndex')->withStatus(__('Слайд создан.'));
        }
        return view('homeSlider.create');
    }

    /**
     *  Edit item
     * @param $id
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id, Request $request)
    {
        $item = HomeSlider::find($id);
        if ($request->isMethod('post')) {
            $item->fill($request->all());
            $item->save();
            return redirect()->route('homeSliderIndex')->withStatus(__('Слайд успешно отредкатирован.'));
        }
        return view('homeSlider.edit', compact('item'));
    }


    /*
     * Delete row
     */
    public function delete($id)
    {
        $item = HomeSlider::find($id);
        $item->delete();
        return redirect()->route('homeSliderIndex')->withStatus(__('Слайд удален.'));
    }
}

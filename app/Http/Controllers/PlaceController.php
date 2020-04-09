<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;
class PlaceController extends Controller
{
    /**
     * Show the list items Afisha
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $items = Place::paginate('50');
        return view('place.index', compact('items'));
    }

    /**
     * Create new item afisha  post and get methods
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $model = Place::create($request->all());
            $model->save();
            return redirect()->route('placeIndex')->withStatus(__('Запись создана.'));
        }
        return view('place.create');
    }

    /**
     * Edit item
     * @param $id
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id, Request $request)
    {
        $item = Place::find($id);
        if ($request->isMethod('post')) {
            $item->fill($request->all());
            $item->save();
            return redirect()->route('placeIndex')->withStatus(__('Запись успешно отредкатирована.'));
        }
        return view('place.edit', compact('item'));
    }
    /*
    * Delete row
    * @param $id
    */
    public function delete($id)
    {
        $item = Place::find($id);
        $item->delete();
        return redirect()->route('placeIndex')->withStatus(__('Запись удалена'));
    }

}

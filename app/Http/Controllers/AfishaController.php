<?php

namespace App\Http\Controllers;

use App\Afisha;
use App\Place;
use Illuminate\Http\Request;

class AfishaController extends Controller
{
    /**
     * Show the list items Afisha
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $items = Afisha::activeWithPlaces();

        return view('afisha.index', compact('items'));
    }

    /**
     * Create new item afisha  post and get methods
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $model = Afisha::create($request->all());
            $model->save();
            return redirect()->route('afishaIndex')->withStatus(__('Запись создана.'));
        }
        $places = Place::all();
        return view('afisha.create', compact('places'));
    }

    /**
     * Edit item
     * @param $id
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id, Request $request)
    {
        $item = Afisha::find($id);
        if ($request->isMethod('post')) {
            $item->fill($request->all());
            $item->save();
            return redirect()->route('afishaIndex')->withStatus(__('Запись успешно отредкатирована.'));
        }
        $places = Place::all();
        return view('afisha.edit', compact('item', 'places'));
    }
  /*
  * Delete row
  * @param $id
  */
    public function delete($id)
    {
        $item = Afisha::find($id);
        $item->delete();
        return redirect()->route('afishaIndex')->withStatus(__('Запись удалена'));
    }

}

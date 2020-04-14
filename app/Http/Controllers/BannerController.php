<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banners;
class BannerController extends Controller
{
    /**
     * Show the list items Afisha
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $items = Banners::paginate('50');

        return view('banners.index', compact('items'));
    }

    /**
     * Create new item afisha  post and get methods
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $model = Banners::create($request->all());
            $model->save();
            return redirect()->route('bannersIndex')->withStatus(__('Запись создана.'));
        }
        $places = Banners::Pages();
        return view('banners.create' , compact('places'));
    }

    /**
     * Edit item
     * @param $id
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id, Request $request)
    {
        $item = Banners::find($id);
        if ($request->isMethod('post')) {
            $item->fill($request->all());
            $item->save();
            return redirect()->route('bannersIndex')->withStatus(__('Запись успешно отредкатирована.'));
        }
        $places = Banners::Pages();
        return view('banners.edit', compact('item', 'places'));
    }
    /*
    * Delete row
    * @param $id
    */
    public function delete($id)
    {
        $item = Banners::find($id);
        $item->delete();
        return redirect()->route('bannersIndex')->withStatus(__('Запись удалена'));
    }

}

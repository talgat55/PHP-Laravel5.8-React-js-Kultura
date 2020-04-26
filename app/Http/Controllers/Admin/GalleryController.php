<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Gallery;
class GalleryController extends Controller
{
    /**
     * Show the list items Gallery
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $items = Gallery::activeWithPaginate();

        return view('gallery.index', compact('items'));
    }

    /**
     * Create new item Gallery  post and get methods
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $model = Gallery::create($request->all());
            $model->save();
            return redirect()->route('galleryIndex')->withStatus(__('Запись создана.'));
        }
        return view('gallery.create' );
    }

    /**
     * Edit item
     * @param $id
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id, Request $request)
    {
        $item = Gallery::find($id);
        if ($request->isMethod('post')) {
            $item->fill($request->all());
            $item->save();
            return redirect()->route('galleryIndex')->withStatus(__('Запись успешно отредкатирована.'));
        }
        return view('gallery.edit', compact('item'));
    }
    /*
    * Delete row
    * @param $id
    */
    public function delete($id)
    {
        $item = Gallery::find($id);
        $item->delete();
        return redirect()->route('galleryIndex')->withStatus(__('Запись удалена'));
    }
}

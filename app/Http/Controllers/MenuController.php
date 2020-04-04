<?php

namespace App\Http\Controllers;

use App\Menus;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Show the list items Menu
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $items = Menus::paginate('50');
        return view('menu.index', compact('items'));
    }

    /**
     * Create new item menu  post and get methods
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $model = Menus::create($request->all());
            $model->save();
            return redirect()->route('menuIndex')->withStatus(__('Пункт меню создан.'));
        }
        return view('menu.create');
    }

    /**
     *  Edit item
     * @param $id
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id, Request $request)
    {
        $item = Menus::find($id);
        if ($request->isMethod('post')) {
            $item->fill($request->all());
            $item->save();
            return redirect()->route('menuIndex')->withStatus(__('Пункт меню  успешно отредкатирован.'));
        }
        return view('menu.edit', compact('item'));
    }

    /*
     * Delete row
     * @param $id
     */
    public function delete($id)
    {
        $item = Menus::find($id);
        $item->delete();
        return redirect()->route('menuIndex')->withStatus(__('Пункт меню  удален.'));
    }




}

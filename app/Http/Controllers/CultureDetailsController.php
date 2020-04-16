<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\CultureDetails;
class CultureDetailsController extends Controller
{
    /**
     * Show the list items
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $items = CultureDetails::activeWithPaginate();

        return view('culturedetails.index', compact('items'));
    }

    /**
     * Create new item    post and get methods
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $model = CultureDetails::create($request->all());
            $model->save();
            return redirect()->route('cultureDetailsIndex')->withStatus(__('Запись создана.'));
        }
        $categories= CultureDetails::categories();
        return view('culturedetails.create', compact('categories'));
    }

    /**
     * Edit item
     * @param $id
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id, Request $request)
    {
        $item = CultureDetails::find($id);
        if ($request->isMethod('post')) {
            $item->fill($request->all());
            $item->save();
            return redirect()->route('cultureDetailsIndex')->withStatus(__('Запись успешно отредкатирована.'));
        }
        $categories= CultureDetails::categories();
        return view('culturedetails.edit', compact('item', 'categories'));
    }

    /*
    * Delete row
    * @param $id
    */
    public function delete($id)
    {
        $item = CultureDetails::find($id);
        $item->delete();
        return redirect()->route('cultureDetailsIndex')->withStatus(__('Запись удалена'));
    }

}

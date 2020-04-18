<?php

namespace App\Http\Controllers;
use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Show the list items
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $items = News::paginate('50');

        return view('news.index', compact('items'));
    }

    /**
     * Create new item afisha  post and get methods
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $model = News::create($request->all());
            $model->save();
            return redirect()->route('newsIndex')->withStatus(__('Запись создана.'));
        }
        return view('news.create' );
    }

    /**
     * Edit item
     * @param $id
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id, Request $request)
    {
        $item = News::find($id);
        if ($request->isMethod('post')) {
            $item->fill($request->all());
            $item->save();
            return redirect()->route('newsIndex')->withStatus(__('Запись успешно отредкатирована.'));
        }
        return view('news.edit', compact('item'));
    }
    /*
    * Delete row
    * @param $id
    */
    public function delete($id)
    {
        $item = News::find($id);
        $item->delete();
        return redirect()->route('newsIndex')->withStatus(__('Запись удалена'));
    }
}

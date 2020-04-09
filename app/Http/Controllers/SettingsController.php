<?php

namespace App\Http\Controllers;

use App\ThemeSettings;
use Illuminate\Http\Request;
class SettingsController extends Controller
{

    /**
     * Settings theme
     *
     * @return \Illuminate\View\View
     */
    public function index($id = null, Request $request)
    {
        $item = ThemeSettings::find(1);
        if (!empty($item)) {
            return view('settings.edit', compact('item'));
        } else {
            $item = new ThemeSettings;
            return view('settings.create', compact('item')  );
        }


    }



    /**
     * Show the form for creating a new item.
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store($id =null,Request $request)
    {

        if (!empty($id)) {
            $item = ThemeSettings::find($id);
            if ($request->isMethod('post')) {
                $item->fill($request->all());
                $item->save();
                return redirect()->route('settingsIndex', $item->id)->withStatus(__('Информация отредкатирована.'));
            }
        }else{
            if ($request->isMethod('post')) {
                $item = new ThemeSettings;
                $model = ThemeSettings::create($request->all());
                $model->save();
                return redirect()->route('settingsIndex', $item->id)->withStatus(__('Информация отредкатирована.'));
            }
        }


    }

}

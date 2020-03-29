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
    public function index($id =null, Request $request)
    {

        if (!empty($id)) {
            $item = ThemeSettings::find($id);
        } else {
            $item = new ThemeSettings;
        }
        if ($request->isMethod('post')) {
            $item->fill($request->all());
            $item->save();
            return redirect()->route('settingsIndex', $item->id)->withStatus(__('Информация отредкатирована.'));
        }
        return view('settings.edit', compact('item'));
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('dashboard');
    }

    /*
     * Upload images from forms
     */
    public function upload(Request $request)
    {

        $path = $request->input('path');
        if(isset($path) && !empty($path)){
            $folderSave= $path;

        }else{
            $folderSave= 'main';

        }
        $path = $request->file('file')->store('public/'.$folderSave);

        $url = Storage::url($path);
        return response()->json(['data' => $url]);
    }

}

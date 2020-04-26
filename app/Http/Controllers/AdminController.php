<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Spatie\ImageOptimizer\OptimizerChainFactory;
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
     * Upload image from forms
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

        $optimizerChain = OptimizerChainFactory::create();
        $optimizerChain->optimize(Storage::path($path));

        $url = Storage::url($path);
        return response()->json(['data' => $url]);
    }
    /*
     * Upload images from forms
     */
    public function uploads(Request $request)
    {

        $path = $request->input('path');
        if(isset($path) && !empty($path)){
            $folderSave= $path;

        }else{
            $folderSave= '/main';

        }
        $images = [];

        if($request->get('totalImages') > 0) {
            for ($x = 0; $x < $request->get('totalImages'); $x++) {
                $path = $request->file('file'.$x)->store('public/'.$folderSave);
                $optimizerChain = OptimizerChainFactory::create();
                $optimizerChain->optimize(Storage::path($path));
                $url = Storage::url($path);
                $images[]=$url;
            }
        }



        return response()->json(['data' => $images]);
    }

}

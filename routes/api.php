<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/get-settings', 'ApiSettingsThemeController@get')->name('apiGetSettings');
Route::get('/get-menus', 'ApiMenuController@get')->name('apiGetMenus');
Route::get('/get-home-slider', 'ApiHomeSliderController@get')->name('apiGetHomeSlider');
Route::get('/get-afisha-related', 'ApiAfishaController@getRelated')->name('apiGetAfishaRelated');
Route::get('/get-banner/{page}', 'ApiBannerController@get')->name('apiGetBannerByPage');
Route::get('/get-culture-details-last', 'ApiCultureDetailsController@getRelated')->name('apiGetLastCultureDetails');
Route::get('/get-news-last', 'ApiNewsController@getRelated')->name('apiGetLastNews');
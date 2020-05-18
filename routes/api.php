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

Route::get('/get-settings', 'Api\ApiSettingsThemeController@get')->name('apiGetSettings');
Route::get('/get-menus', 'Api\ApiMenuController@get')->name('apiGetMenus');
Route::get('/get-home-slider', 'Api\ApiHomeSliderController@get')->name('apiGetHomeSlider');

Route::get('/get-afisha-related', 'Api\ApiAfishaController@getRelated')->name('apiGetAfishaRelated');
Route::get('/get-afisha-detail/{id}', 'Api\ApiAfishaController@getDetail')->name('apiGetAfishaDetail');
Route::get('/get-afisha-related-page/{page}', 'Api\ApiAfishaController@getRelatedPage')->name('apiGetAfishaRelatedPage');


Route::get('/get-banner/{page}', 'Api\ApiBannerController@get')->name('apiGetBannerByPage');

Route::get('/get-culture-details-last', 'Api\ApiCultureDetailsController@getRelated')->name('apiGetLastCultureDetails');
Route::get('/get-culture-details-page', 'Api\ApiCultureDetailsController@getPage')->name('apiGetCultureDetailsPage');

Route::get('/get-news-last', 'Api\ApiNewsController@getRelated')->name('apiGetLastNews');
Route::get('/get-news/{page}', 'Api\ApiNewsController@getWithPage')->name('apiGetNewsWithPage');
Route::get('/get-news-detail/{slug}', 'Api\ApiNewsController@getDetail')->name('apiGetNewsDetail');


Route::get('/get-places', 'Api\ApiPlaceController@getRelated')->name('apiGetRelatedPlaces');


Route::get('/get-gallery-page/{page}', 'Api\ApiGalleryController@getPage')->name('apiGetGalleryPage');
Route::get('/get-gallery-detail/{slug}', 'Api\ApiGalleryController@getDetail')->name('apiGetGalleryPageDetail');


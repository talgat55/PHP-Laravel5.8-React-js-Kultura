<?php

use Illuminate\Support\Facades\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


if (!strpos(Request::url(), "admin")) {
    Route::any('{slug}', function($slug = null)
    {
        return view('welcome');
    })->where('slug', '.*');
}

Route::get('/admin', 'AdminController@index')->name('adminIndex');
Route::prefix('admin')->group(function () {
    Route::post('/upload-images/upload', 'AdminController@upload');
    Route::post('/upload-images/uploads', 'AdminController@uploads');
    Route::get('/home-slider', 'HomeSliderController@index')->name('homeSliderIndex');
    Route::match(['get', 'post'], '/home-slider/create', ['as' => 'homeSliderCreate', 'uses' => 'HomeSliderController@create']);
    Route::delete('/home-slider/{id}/delete', 'HomeSliderController@delete')->name('homeSliderDelete');
    Route::match(['get', 'post'], '/home-slider/{id}/edit', ['as' => 'homeSliderEdit', 'uses' => 'HomeSliderController@edit']);

    Route::get('/menus', 'MenuController@index')->name('menuIndex');
    Route::match(['get', 'post'], '/menus/create', ['as' => 'menuCreate', 'uses' => 'MenuController@create']);
    Route::match(['get', 'post'], '/menus/{id}/edit', ['as' => 'menuEdit', 'uses' => 'MenuController@edit']);
    Route::delete('/menus/{id}/delete', 'MenuController@delete')->name('menuDelete');

    Route::get('/settings/{id?}', 'SettingsController@index')->name('settingsIndex');
    Route::post('/settings/update/{id?}', 'SettingsController@store')->name('settingsUpdate');

    Route::get('/afisha', 'AfishaController@index')->name('afishaIndex');
    Route::match(['get', 'post'], '/afisha/create', ['as' => 'afishaCreate', 'uses' => 'AfishaController@create']);
    Route::match(['get', 'post'], '/afisha/{id}/edit', ['as' => 'afishaEdit', 'uses' => 'AfishaController@edit']);
    Route::delete('/afisha/{id}/delete', 'AfishaController@delete')->name('afishaDelete');

    Route::get('/place', 'PlaceController@index')->name('placeIndex');
    Route::match(['get', 'post'], '/place/create', ['as' => 'placeCreate', 'uses' => 'PlaceController@create']);
    Route::match(['get', 'post'], '/place/{id}/edit', ['as' => 'placeEdit', 'uses' => 'PlaceController@edit']);
    Route::delete('/place/{id}/delete', 'PlaceController@delete')->name('placeDelete');

    Route::get('/banners', 'BannerController@index')->name('bannersIndex');
    Route::match(['get', 'post'], '/banners/create', ['as' => 'bannersCreate', 'uses' => 'BannerController@create']);
    Route::match(['get', 'post'], '/banners/{id}/edit', ['as' => 'bannersEdit', 'uses' => 'BannerController@edit']);
    Route::delete('/banners/{id}/delete', 'BannerController@delete')->name('bannersDelete');

    Route::get('/culture-details', 'CultureDetailsController@index')->name('cultureDetailsIndex');
    Route::match(['get', 'post'], '/culture-details/create', ['as' => 'cultureDetailsCreate', 'uses' => 'CultureDetailsController@create']);
    Route::match(['get', 'post'], '/culture-details/{id}/edit', ['as' => 'cultureDetailsEdit', 'uses' => 'CultureDetailsController@edit']);
    Route::delete('/culture-details/{id}/delete', 'CultureDetailsController@delete')->name('cultureDetailsDelete');

    Route::get('/news', 'NewsController@index')->name('newsIndex');
    Route::match(['get', 'post'], '/news/create', ['as' => 'newsCreate', 'uses' => 'NewsController@create']);
    Route::match(['get', 'post'], '/news/{id}/edit', ['as' => 'newsEdit', 'uses' => 'NewsController@edit']);
    Route::delete('/news/{id}/delete', 'NewsController@delete')->name('newsDelete');

    Route::get('/gallery', 'Admin\GalleryController@index')->name('galleryIndex');
    Route::match(['get', 'post'], '/gallery/create', ['as' => 'galleryCreate', 'uses' => 'Admin\GalleryController@create']);
    Route::match(['get', 'post'], '/gallery/{id}/edit', ['as' => 'galleryEdit', 'uses' => 'Admin\GalleryController@edit']);
    Route::delete('/gallery/{id}/delete', 'Admin\GalleryController@delete')->name('galleryDelete');


});



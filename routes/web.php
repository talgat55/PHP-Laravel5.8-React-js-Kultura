<?php

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin', 'AdminController@index')->name('adminIndex');
Route::prefix('admin')->group(function () {
    Route::post('/upload-images/upload','AdminController@upload');
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
//    Route::match(['get', 'post'], '/settings/{id?}', ['as' => 'settingsIndex', 'uses' => 'SettingsController@index']);
//    Route::match(['get', 'post'], '/settings/{id?}', ['as' => 'settingsIndex', 'uses' => 'SettingsController@index']);

});

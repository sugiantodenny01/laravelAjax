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

Route::resource('contact','ContactController');

Route::get('api/contact','ContactController@apiContact')->name('api.contact');

Route::group(['middleware'=>'auth'],function () {

    Route::get('/admin/index', [
        'uses' => 'ContactController@adminDashboard',
        'as' => 'admin.dashboard'
    ]);

});

Route::get('/gambar', [
    'uses' => 'GambarController@index',
    'as' => 'upGambar'
]);
Route::get('/gambar/upload', [
    'uses' => 'GambarController@create',
    'as' => 'upload'
]);
Route::post('/gambar/upload', [
    'uses' => 'GambarController@store',
    'as' => 'uploadStore'
]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

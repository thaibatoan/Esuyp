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

Auth::routes();

Route::group(['prefix' => 'auth'], function(){
    Route::get('{provider}', 'Auth\AuthController@redirectToProvider');
    Route::get('{provider}/callback', 'Auth\AuthController@handleProviderCallback');
});

Route::get('/browse', 'BrowseController@index')->name('browse');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/contact', 'BrowseController@index')->name('contact');

Route::group(['middleware' => 'web'], function(){
    Route::get('/index', [
        'uses' => 'IndexController@index',
        'as' => 'index',
        'middleware' => 'roles',
    ]);
    Route::get('/index', [
        'uses' => 'IndexController@index',
        'as' => 'index',
        'middleware' => 'roles',
    ]);
});
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


route::group(['prefix'=>'blog', 'middleware' => ['web']],function (){
    route::get('/','BlogController@index')->name('blogs.index');
    route::get('/{id}/destroy','BlogController@destroy')->name('blogs.destroy');
    route::post('/create','BlogController@store')->name('blogs.store');
    route::get('/create','BlogController@create')->name('blogs.create');
    route::get('{id}/edit','BlogController@edit')->name('blogs.edit');
    route::post('{id}/edit','BlogController@update')->name('blogs.update');
    route::get('/search','BlogController@search')->name('blogs.search');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

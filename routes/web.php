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
Route::group(['middleware' => 'auth'] , function(){
  Route::get('index' , 'ContatoController@index')->name('principal');
  Route::get('create' ,'ContatoController@create')->name('create');
  Route::post('store' , 'ContatoController@store')->name('store');
  Route::get('edit/{id}' , 'ContatoController@edit');
  Route::post('update/{id}' , 'ContatoController@update')->name('update');
  Route::get('destroy/{id}' , 'ContatoController@destroy');
});


Auth::routes();

$this->get('home' , 'ContatoController@index');

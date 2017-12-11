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
//Route::group(['middleware' => 'auth'] , function(){
//  Route::get('index' , 'ContatoController@index')->name('contato.index');
//  Route::get('create' ,'ContatoController@create')->name('contato.create');
//  Route::post('store' , 'ContatoController@store')->name('contato.store');
//  Route::get('{id}/edit/' , 'ContatoController@edit')->name('contato.edit');
//  Route::post('update/{id}' , 'ContatoController@update')->name('contato.update');
//  Route::get('destroy/{id}' , 'ContatoController@destroy')->name('contato.destroy');
//});

Route::resource('contato' , 'ContatoController');

Auth::routes();

$this->get('home' , 'ContatoController@index');

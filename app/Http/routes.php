<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::group(['prefix' => 'party'], function() {
	Route::get('/', ['as' => 'index', 'uses' => 'PartyController@index']);
	Route::get('/criar', ['as' => 'criar', 'uses' => 'PartyController@criar']);
	Route::post('/salvar', ['as' => 'salvar', 'uses' => 'PartyController@salvar']);
	Route::get('/editar/{id}', ['as' => 'editar', 'uses' => 'PartyController@editar']);
	Route::post('/atualizar/{id}', ['as' => 'atualizar', 'uses' => 'PartyController@atualizar']);
	Route::get('/remover/{id}', ['as' => 'remover', 'uses' => 'PartyController@remover']);
});

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('welcome');
    });

});

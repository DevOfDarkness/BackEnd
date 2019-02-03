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

/*Rotas remedios*/
Route::get('remedios', 'RemedioController@list')->name('lista_todos');
Route::get('remedios/{id_remedio}', 'RemedioController@show')->name('mostra_remedios');
Route::put('remedios/{id_remedio}', 'RemedioController@update')->name('atualiza_remedios');
Route::delete('remedios/{id_remedio}', 'RemedioController@destroy')->name('deleta_remedios');
Route::post('remedios', 'RemedioController@create')->name('cria_remedios');


/*Rotas clientes*/
Route::get('clientes', 'ClienteController@list')->name('lista_todos');
Route::get('clientes/{id_cliente}', 'ClienteController@show')->name('mostra_clientes');
Route::put('clientes/{id_cliente}', 'ClienteController@update')->name('atualiza_clientes');
Route::delete('clientes/{id_cliente}', 'ClienteController@destroy')->name('deleta_clientes');
Route::post('clientes', 'ClienteController@create')->name('cria_clientes');

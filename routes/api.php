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

Route::post('/saveClassificacao','ClassificacaoController@create')->name('saveClassificacao');

// Route::post('/salvafatura','FaturaController@criar');
Route::post('/update','GetiquetaController@update');
Route::post('/updatecot','ContratoController@updatecot');
// Route::post('/updathvi','GetiquetaController@updathvi');
Route::post('/updathvi','ClassificacaohviController@updathvi');
Route::post('/faturar','FaturaController@updat');
Route::post('/updathvi2','ClassificacaohviController@updathvi2');
Route::post('/classificar','ClassificacaoController@classificar');

Route::post('getCodigobarDisponiveis','ClassificacaoController@getCodigobarDisponiveis')->name('getCodigobarDisponiveis');


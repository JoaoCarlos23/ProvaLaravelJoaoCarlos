<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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




// ------------------TABELIAO-------------------------------------
Route::get('/listartabeliao', 'Api\TabeliaoController@listar');
//salvar:
Route::post('/salvartabeliao','Api\TabeliaoController@salvar');
//buscar:
Route::get('/buscartabeliao{id}','Api\TabeliaoController@buscar');
//atualizar:
Route::put('/atualizartabeliao{id}','Api\TabeliaoController@atualizar');
//deletar
Route::delete('/deletartabeliao{id}','Api\TabeliaoController@deletar');
//cadastrar
Route::post('/cadastrartabeliao','Api\TabeliaoController@cadastrar');


// ------------------CERTIDAO-------------------------------------
Route::get('/listarcertidao', 'Api\CertidaoController@listar');
//salvar:
Route::post('/salvarcertidao','Api\CertidaoController@salvar');
//buscar:
Route::get('/buscarcertidao{id}','Api\CertidaoController@buscar');
//atualizar:
Route::put('/atualizarcertidao{id}','Api\CertidaoController@atualizar');
//deletar
Route::delete('/deletarcertidao{id}','Api\CertidaoController@deletar');
//cadastrar
Route::post('/cadastrarcertidao','Api\CertidaoController@cadastrar');


// ------------------CONTRATO-------------------------------------
Route::get('/listarcontrato', 'Api\ContratoController@listar');
//salvar:
Route::post('/salvarcontrato','Api\ContratoController@salvar');
//buscar:
Route::get('/buscarcontrato{id}','Api\ContratoController@buscar');
//atualizar:
Route::put('/atualizarcontrato{id}','Api\ContratoController@atualizar');
//deletar
Route::delete('/deletarcontrato{id}','Api\ContratoController@deletar');
//cadastrar
Route::post('/cadastrarcontrato','Api\ContratoController@cadastrar');


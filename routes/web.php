<?php

use Illuminate\Support\Facades\Route;

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


//NOME DO BANCO: laravel


// -------------------------TABELIAO----------------------------------------


Route::get('/tabeliao', 'TabeliaoController@index')   //index de tabeliao
->name('admin.tabeliao'); //aqui e o apelido pra rota


Route::get('/tabeliao/adicionar','TabeliaoController@create') //Adicionar tabeliao
->name('admin.tabeliao.adicionar');

Route::post('/tabeliao/salvar','TabeliaoController@store') //salvar tabeliao
->name('admin.tabeliao.salvar');

// id é obrigatorio passar pra editar qual curso é
Route::get('/tabeliao/editar/{id}', 'TabeliaoController@edit') //editar tabeliao
->name('admin.tabeliao.editar');

Route::put('/tabeliao/atualizar/{id}', 'TabeliaoController@update') //atualizar tabeliao
->name('admin.tabeliao.atualizar');

Route::delete('/tabeliao/deletar/{id}', 'TabeliaoController@destroy') //deletar tabeliao
->name('admin.tabeliao.deletar');





// -------------------------CERTIDAO----------------------------------------


Route::get('/certidao', 'CertidaoController@index')   //index de certidao
->name('admin.certidao'); //aqui e o apelido pra rota


Route::get('/certidao/adicionar','CertidaoController@create') //Adicionar certidao
->name('admin.certidao.adicionar');

Route::post('/certidao/salvar','CertidaoController@store') //salvar certidao
->name('admin.certidao.salvar');

// id é obrigatorio passar pra editar qual curso é
Route::get('/certidao/editar/{id}', 'CertidaoController@edit') //editar certidao
->name('admin.certidao.editar');

Route::put('/certidao/atualizar/{id}', 'CertidaoController@update') //atualizar certidao
->name('admin.certidao.atualizar');

Route::delete('/certidao/deletar/{id}', 'CertidaoController@destroy') //deletar certidao
->name('admin.certidao.deletar');





// -------------------------CONTRATO----------------------------------------


Route::get('/contrato', 'ContratoController@index')   //index de contrato
->name('admin.contrato'); //aqui e o apelido pra rota


Route::get('/contrato/adicionar','ContratoController@create') //Adicionar contrato
->name('admin.contrato.adicionar');

Route::post('/contrato/salvar','ContratoController@store') //salvar contrato
->name('admin.contrato.salvar');

// id é obrigatorio passar pra editar qual curso é
Route::get('/contrato/editar/{id}', 'ContratoController@edit') //editar contrato
->name('admin.contrato.editar');

Route::put('/contrato/atualizar/{id}', 'ContratoController@update') //atualizar contrato
->name('admin.contrato.atualizar');

Route::delete('/contrato/deletar/{id}', 'ContratoController@destroy') //deletar contrato
->name('admin.contrato.deletar');



Auth::routes();

Route::get('/home', 'TabeliaoController@index')->name('home');
Route::get('/', 'TabeliaoController@index')->name('home');

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
    return view('menu');
});

Route::resource('atividade','AtividadeController');

//Route::resource('empresa', 'empresaController');

Route::resource('medidaPreventiva','MedidaPreventivaController');

Route::resource('riscos', 'RiscosController');

Route::post('riscos/associate/{id}', 'RiscosController@associate');
Route::post('riscos/desassociate/{id}', 'RiscosController@desassociate');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

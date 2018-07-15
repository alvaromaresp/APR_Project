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

Route::resource('atividades','AtividadeController');
Route::post('atividades/associate/{id}', 'AtividadeController@associate');
Route::post('atividades/desassociate/{id}', 'AtividadeController@desassociate');

Route::resource('medidaPreventiva','MedidaPreventivaController');

Route::resource('riscos', 'RiscosController');
Route::post('riscos/associate/{id}', 'RiscosController@associate');
Route::post('riscos/desassociate/{id}', 'RiscosController@desassociate');

Route::resource('ferramenta', 'FerramentaController');
Route::post('ferramenta/associate/{id}', 'FerramentaController@associate');
Route::post('ferramenta/desassociate/{id}', 'FerramentaController@desassociate');

Route::resource('disciplina', 'DisciplinaController');

Route::resource('naturezaRiscos', 'naturezaRiscosController');

Route::resource('checklist', 'CheckListController');

Route::resource('area', 'AreaController');

Route::resource('sesmt', 'SesmtController');

Route::resource('coordena', 'CoordenaController');

Route::resource('empresa', 'EmpresaController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

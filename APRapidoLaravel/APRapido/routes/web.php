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

Route::get('/editar', function () {
    return view('menuEditar');
});

Route::get('/responsavel', function () {
    return view('menuResponsavel');
});

Route::resource('atividades','AtividadeController');
Route::post('atividades/associate/{id}', 'AtividadeController@associate');
Route::post('atividades/desassociate/{id}', 'AtividadeController@desassociate');

Route::resource('medidaPreventiva','MedidaPreventivaController');
Route::post('/medidaPreventiva/search','MedidaPreventivaController@search');

Route::resource('riscos', 'RiscosController');
Route::post('/riscos/search','RiscosController@search');
Route::post('riscos/associate/{id}', 'RiscosController@associate');
Route::post('riscos/desassociate/{id}', 'RiscosController@desassociate');

Route::resource('ferramenta', 'FerramentaController');
Route::post('/ferramenta/search','FerramentaController@search');
Route::post('ferramenta/associate/{id}', 'FerramentaController@associate');
Route::post('ferramenta/desassociate/{id}', 'FerramentaController@desassociate');

Route::resource('disciplina', 'DisciplinaController');
Route::post('/disciplina/search','DisciplinaController@search');

Route::resource('naturezaRiscos', 'naturezaRiscosController');

Route::resource('checklist', 'CheckListController');
Route::post('/checklist/search','CheckListController@search');

Route::resource('area', 'AreaController');
Route::post('/area/search','AreaController@search');

Route::resource('sesmt', 'SesmtController');
Route::post('/sesmt/search','SesmtController@search');

Route::resource('coordena', 'CoordenaController');
Route::post('/coordena/search','CoordenaController@search');

Route::resource('empresa', 'EmpresaController'); 
Route::post('/empresa/search','EmpresaController@search');

Route::resource('apr', 'AprController');
Route::post('apr/associateAtividade/{id}', 'AprController@associateAtividade');
Route::post('apr/desassociateAtividade/{id}', 'AprController@desassociateAtividade');
Route::post('apr/associateChecklist/{id}', 'AprController@associateChecklist');
Route::post('apr/desassociateChecklist/{id}', 'AprController@desassociateChecklist');
Route::post('apr/associateNaturezariscos/{id}', 'AprController@associateNaturezariscos');
Route::post('apr/desassociateNaturezariscos/{id}', 'AprController@desassociateNaturezariscos');
Route::post('apr/associateNaturezariscosCall/{id}', 'AprController@associateNaturezariscosCall');
Route::post('apr/associateChecklistCall/{id}', 'AprController@associateChecklistCall');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

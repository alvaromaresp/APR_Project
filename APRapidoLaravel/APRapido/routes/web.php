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

Route::get('/', 'pagesController@menu');
Route::get('/responsavel', 'pagesController@menuResponsavel');

Route::resource('atividades','AtividadeController');
Route::get('atividades/associate/{id}', 'AtividadeController@associate');
    Route::get('atividades/associate/modal/{id}', 'AtividadeController@associateModal');
Route::post('atividades/associateStore/{id}', 'AtividadeController@associateStore');
Route::post('atividades/desassociate/{id}', 'AtividadeController@desassociate');
Route::get('atividades/create/modal', 'AtividadeController@createModal');

Route::resource('medidaPreventiva','MedidaPreventivaController');
Route::post('/medidaPreventiva/search','MedidaPreventivaController@search');
Route::get('/medidaPreventiva/create/modal', 'MedidaPreventivaController@createModal');


Route::resource('riscos', 'RiscosController');
Route::post('/riscos/search','RiscosController@search');
Route::get('riscos/associate/{id}', 'RiscosController@associate');
Route::get('riscos/associate/modal/{id}', 'RiscosController@associateModal');
Route::post('riscos/associateStore/{id}', 'RiscosController@associateStore');
Route::post('riscos/desassociate/{id}', 'RiscosController@desassociate');
Route::get('riscos/create/modal', 'RiscosController@createModal');


Route::resource('ferramenta', 'FerramentaController');
Route::post('/ferramenta/search','FerramentaController@search');
Route::get('ferramenta/associate/{id}', 'FerramentaController@associate');
Route::get('ferramenta/associate/modal/{id}', 'FerramentaController@associateModal');
Route::post('ferramenta/associateStore/{id}', 'FerramentaController@associateStore');
Route::post('ferramenta/desassociate/{id}', 'FerramentaController@desassociate');
Route::get('ferramenta/create/modal', 'FerramentaController@createModal');

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
Route::get('apr/associateAtividade/{id}', 'AprController@associateAtividade');
Route::post('apr/associateAtividadeStore/{id}', 'AprController@associateAtividadeStore');
Route::post('apr/desassociateAtividade/{id}', 'AprController@desassociateAtividade');
Route::post('apr/associateChecklist/{id}', 'AprController@associateChecklist');
Route::post('apr/desassociateChecklist/{id}', 'AprController@desassociateChecklist');
Route::post('apr/associateNaturezariscos/{id}', 'AprController@associateNaturezariscos');
Route::post('apr/desassociateNaturezariscos/{id}', 'AprController@desassociateNaturezariscos');
Route::get('apr/associateNaturezariscosCall/{id}', 'AprController@associateNaturezariscosCall');
Route::get('apr/associateChecklistCall/{id}', 'AprController@associateChecklistCall');
Route::post('apr/show/{id}', 'AprController@showAPRbyLog')->name('showAPRbyLog');


Route::post('impressao/store', 'ImpressaoController@store');
Route::get('impressao/{id}','ImpressaoController@preImpressao');
Route::get('pdf/{id}','ImpressaoController@geraPdf');

Route::auth();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/registros', 'RegistrosController@index');
Route::post('/registros/search', 'RegistrosController@search');
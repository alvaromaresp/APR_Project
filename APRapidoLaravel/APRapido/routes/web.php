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

Route::get('/criarApr', 'menuController@criarApr'); 

Route::resource('naturezaRiscos', 'naturezaRiscosController');

Route::resource('empresa', 'empresaController');

Auth::routes();


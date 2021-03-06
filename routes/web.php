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

Route::group(['prefix'=>'adm'],function(){
    Route::get('concurso', 'Adm\ConcursoController@index');
    Route::resource('concurso', 'Adm\Concurso\ConcursoController');
    Route::resource('categoria_concurso','Adm\CategoriaConcursoController');
    Route::resource('serie','Adm\Serie\SerieController');
    Route::resource('modalidade','Adm\Serie\ModalidadeController');
});

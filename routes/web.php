<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'NoticiaController@index')->name('noticia.index');
Route::get('/calendario-gp-2023', 'CalendarioController@index')->name('calendario.index');
Route::get('/piloto-gp-2023', 'PilotoController@index')->name('piloto.index');
Route::get('/equipe-gp-2023', 'EquipeController@index')->name('equipe.index');



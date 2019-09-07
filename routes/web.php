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
Route::resource('/nuevoAutor','AutorController');

Route::get('/', function () {
    return view('index');
});
Route::resource('/articulo', 'ArticuloController');
Route::get('/insertarAutor', 'TablasIntermediasController@articuloInsertar')->name('tiInsertar');
Route::get('/autores', 'TablasIntermediasController@articulo')->name('tiArticulo');
Route::get('/eliminarAutor', 'TablasIntermediasController@articuloEliminar')->name('tiEliminar');
//usuarios logeados
Route::get('/datosGenerales', 'usuarioController@datosGenerales')->name('datos');

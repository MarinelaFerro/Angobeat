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
/* Index do sistema */
Route::get('/', ['as' => 'raiz', 'uses' => 'Admin\HomeController@index']);

/* Categorias */
Route::get('/categoria', ['as' => 'categoria.ver', 'uses' => 'Admin\UserController@index']);




Route::get('/musicas', ['as' => 'musicas.ver', 'uses' => 'Admin\UserController@index']);
Route::get('/albuns', ['as' => 'albuns.ver', 'uses' => 'Admin\UserController@index']);
Route::get('/favoritos', ['as' => 'favoritos.ver', 'uses' => 'Admin\UserController@index']);
Route::get('/playlists', ['as' => 'playlists.ver', 'uses' => 'Admin\UserController@index']);
Route::get('/artistas', ['as' => 'artistas.ver', 'uses' => 'Admin\UserController@index']);




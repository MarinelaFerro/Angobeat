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
/* Raíz principal */
Route::get('/', ['as' => 'raiz', 'uses' => 'Admin\HomeController@index']);

/* categorias */
Route::get('/categorias/todas', ['as' => 'categoria.todas', 'uses' => 'Admin\CategoriaController@index']);
/* musicas */
Route::get('/musicas/todas', ['as' => 'musica.todas', 'uses' => 'Admin\MusicaController@index']);
/* albuns */
Route::get('/albuns/todas', ['as' => 'album.todas', 'uses' => 'Admin\AlbumController@index']);
/* favoritos */
Route::get('/favoritos/todas', ['as' => 'favorito.todas', 'uses' => 'Admin\FavoritoController@index']);
/* playlists */
Route::get('/playlists/todas', ['as' => 'playlist.todas', 'uses' => 'Admin\PlaylistController@index']);
/* artistas */
Route::get('/artistas/todas', ['as' => 'artista.todas', 'uses' => 'Admin\ArtistaController@index']);




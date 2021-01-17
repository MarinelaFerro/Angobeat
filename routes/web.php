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

Route::get('/', ['as' => 'raiz', 'uses' => 'HomeController@index']);

/* categorias */
Route::get('/categorias/todas', ['as' => 'categoria.todas', 'uses' => 'Admin\CategoriaController@index']);
Route::get('/categorias/listar', ['as' => 'categoria.listar', 'uses' => 'Admin\CategoriaController@listar']);
Route::get('/categorias/apagar/{id}', ['as' => 'categoria.apagar', 'uses' => 'Admin\CategoriaController@apagar']);

Route::get('/categorias/editar/{id}', ['as' => 'categoria.editar', 'uses' => 'Admin\CategoriaController@editarshow']);
Route::put('/categorias/editar/{id}', ['as' => 'categoria.editar', 'uses' => 'Admin\CategoriaController@editar']);

Route::get('/categorias/cadastrar', ['as' => 'categoria.cadastrar', 'uses' => 'Admin\CategoriaController@cadastrar']);
Route::post('/categorias/cadastrar/enviar', ['as' => 'categoria.cadastrar.enviar', 'uses' => 'Admin\CategoriaController@store']);
/* musicas */
Route::get('/musicas/todas', ['as' => 'musica.todas', 'uses' => 'Admin\MusicaController@index']);
Route::get('/musicas/listar', ['as' => 'musica.listar', 'uses' => 'Admin\MusicaController@listar']);
Route::get('/musicas/apagar/{id}', ['as' => 'musica.apagar', 'uses' => 'Admin\MusicaController@apagar']);

Route::get('/musicas/editar/{id}', ['as' => 'musica.editar', 'uses' => 'Admin\MusicaController@editarshow']);
Route::put('/musicas/editar/{id}', ['as' => 'musica.editar', 'uses' => 'Admin\MusicaController@editar']);

Route::get('/musicas/cadastrar', ['as' => 'musica.cadastrar', 'uses' => 'Admin\MusicaController@cadastrar']);
Route::post('/musicas/cadastrar/enviar', ['as' => 'musica.cadastrar.enviar', 'uses' => 'Admin\MusicaController@store']);

/* albuns */
Route::get('/albuns/todas', ['as' => 'album.todas', 'uses' => 'Admin\AlbumController@index']);
Route::get('/albuns/listar', ['as' => 'album.listar', 'uses' => 'Admin\AlbumController@listar']);
Route::get('/albuns/apagar/{id}', ['as' => 'album.apagar', 'uses' => 'Admin\AlbumController@apagar']);

Route::get('/albuns/editar/{id}', ['as' => 'album.editar', 'uses' => 'Admin\AlbumController@editarshow']);
Route::put('/albuns/editar/{id}', ['as' => 'album.editar', 'uses' => 'Admin\AlbumController@editar']);

Route::get('/albuns/cadastrar', ['as' => 'album.cadastrar', 'uses' => 'Admin\AlbumController@cadastrar']);
Route::post('/albuns/cadastrar/enviar', ['as' => 'album.cadastrar.enviar', 'uses' => 'Admin\AlbumController@store']);
/* favoritos */
Route::get('/favoritos/todas', ['as' => 'favorito.todas', 'uses' => 'Admin\FavoritoController@index']);
Route::get('/favoritos/listar', ['as' => 'favorito.listar', 'uses' => 'Admin\FavoritoController@listar']);
Route::get('/favoritos/apagar/{id}', ['as' => 'favorito.apagar', 'uses' => 'Admin\FavoritoController@apagar']);

Route::get('/favoritos/editar/{id}', ['as' => 'favorito.editar', 'uses' => 'Admin\FavoritoController@editarshow']);
Route::put('/favoritos/editar/{id}', ['as' => 'favorito.editar', 'uses' => 'Admin\FavoritoController@editar']);

Route::get('/favoritos/cadastrar', ['as' => 'favorito.cadastrar', 'uses' => 'Admin\FavoritoController@cadastrar']);
Route::get('/favoritos/cadastrar/enviar', ['as' => 'favorito.cadastrar.enviar', 'uses' => 'Admin\FavoritoController@store']);
/* playlists */
Route::get('/playlists/todas', ['as' => 'playlist.todas', 'uses' => 'Admin\PlaylistController@index']);
Route::get('/playlists/listar', ['as' => 'playlist.listar', 'uses' => 'Admin\PlaylistController@listar']);
Route::get('/playlists/apagar/{id}', ['as' => 'playlist.apagar', 'uses' => 'Admin\PlaylistController@apagar']);

Route::get('/playlists/editar/{id}', ['as' => 'playlist.editar', 'uses' => 'Admin\PlaylistController@editarshow']);
Route::put('/playlists/editar/{id}', ['as' => 'playlist.editar', 'uses' => 'Admin\PlaylistController@editar']);

Route::get('/playlists/cadastrar', ['as' => 'playlist.cadastrar', 'uses' => 'Admin\PlaylistController@cadastrar']);
Route::get('/playlists/cadastrar/enviar', ['as' => 'playlist.cadastrar.enviar', 'uses' => 'Admin\PlaylistController@store']);
/* artistas */
Route::get('/artistas/todas', ['as' => 'artista.todas', 'uses' => 'Admin\ArtistaController@index']);
Route::get('/artistas/listar', ['as' => 'artista.listar', 'uses' => 'Admin\ArtistaController@listar']);
Route::get('/artistas/apagar/{id}', ['as' => 'playlist.apagar', 'uses' => 'Admin\ArtistaController@apagar']);

Route::get('/artistas/editar/{id}', ['as' => 'playlist.editar', 'uses' => 'Admin\ArtistaController@editarshow']);
Route::put('/artistas/editar/{id}', ['as' => 'playlist.editar', 'uses' => 'Admin\ArtistaController@editar']);

Route::get('/artistas/cadastrar', ['as' => 'artista.cadastrar', 'uses' => 'Admin\ArtistaController@cadastrar']);
Route::post('/artistas/cadastrar/enviar', ['as' => 'artista.cadastrar.enviar', 'uses' => 'Admin\ArtistaController@store']);
/*Credências */
Route::get('/login', ['as' => 'auth.login', 'uses' => 'Auth\LoginController@index']);
Route::get('/register', ['as' => 'auth.register', 'uses' => 'Auth\RegisterController@index']);
Route::get('/forgotPassword', ['as' => 'auth.forgotPassword', 'uses' => 'Auth\ForgotPasswordController@index']);

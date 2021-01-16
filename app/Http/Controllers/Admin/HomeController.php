<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\Artista;
use App\Models\Categoria;
use App\Models\Musica;
use App\Models\Playlist;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $response['musicas'] = Musica::all();
        $response['categorias'] = Categoria::orderby('id','desc')->limit(5)->get();
        $response['albuns'] = Album::all();
        $response['artistas'] = Artista::all();
        $response['playlists'] = Playlist::get()->where([['vc_estado' => '1']]);
        $response['n'] = 1;
        return view('index', $response);
    }
}

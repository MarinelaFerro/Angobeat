<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Artista;
use App\Models\Categoria;
use App\Models\Musica;
use App\Models\Playlist;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(Album $albuns, Musica $musicas)
    {
        $response['musicas'] = $musicas->homemusic()->orderby('vc_titulo_musica', 'asc')->limit(10)->get();
        $response['categorias'] = Categoria::orderby('id', 'desc')->limit(5)->get();
        $response['albuns'] = $albuns->homealbum()->orderby('vc_nome_album', 'asc')->limit(5)->get();
        $response['artistas'] = Artista::all();
        $response['playlists'] = Playlist::get()->where([['vc_estado' => '1']]);
        $response['n'] = 1;
        return view('index', $response);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\Artista;
use App\Models\Categoria;
use App\Models\Musica;
use Illuminate\Http\Request;

class MusicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
    }
    public function index(Musica $musicas)
    {
        //
        $response['musicas'] = Musica::orderby('vc_titulo_musica', 'asc')->get();
        $response['n'] = 1;
        $response['titulo'] = "Musicas";
        return view('utilizador.musicas.site.index', $response);
    }
    public function listar(Musica $musicas)
    {
        //

        $response['musicas'] = $musicas->allmusic()->get();
        $response['titulo'] = "Lista de Musicas";
        return view('utilizador.musicas.listar.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cadastrar()
    {
        $response['categorias'] = Categoria::orderby('vc_nome_categoria', 'asc')->get();
        $response['albuns'] = Album::orderby('vc_nome_album', 'asc')->get();
        $response['artistas'] = Artista::orderby('vc_nome_artista', 'asc')->get();
        $response['titulo'] = "Cadastrar Musica";
        return view('utilizador.musicas.cadastrar.index', $response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $dados = $request->all();
        if ($request->hasFile('vc_imagem')) {
            $imagem = $request->file('vc_imagem');
            $num = rand(1111, 9999);
            $dir = "uploads/imagens/musicas";
            $extensao = $imagem->guessClientExtension();
            $nomeImagem =  $num . "." . $extensao;
            $imagem->move($dir, $nomeImagem);
            $dados['vc_imagem'] = $dir . "/" . $nomeImagem;
        }
        Musica::create($dados);
        return redirect()->route('musica.listar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

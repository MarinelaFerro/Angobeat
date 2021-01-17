<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Musica extends Model
{
    use HasFactory;
    protected $table = 'musicas';
    protected $fillable = ['vc_titulo_musica', 'vc_descricao_musica', 'tm_duracao_musica', 'vc_imagem_musica', 'vc_url_musica', 'it_idCategoria_musica', 'it_idAlbum_musica', 'it_idArtista_musica'];

    public  function homemusic()
    {
        $musicas = DB::table('musicas')
            //->join('albuns', 'musicas.it_idAlbum', '=', 'albuns.id')
            ->join('artistas', 'musicas.it_idArtista_musica', '=', 'artistas.id')
            //->join('categorias', 'musicas.it_idCategoria', '=', 'categorias.id')
            ->select(
                'musicas.*',
                //'categorias.vc_nome',
                //'albuns.vc_nome',
                'artistas.vc_nome_artista'  );

        return $musicas;
    }
}

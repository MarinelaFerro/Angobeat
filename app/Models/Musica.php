<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Musica extends Model
{
    use HasFactory;
    protected $table = 'musicas';
    protected $fillable = ['vc_titulo', 'vc_descricao', 'tm_duracao', 'vc_imagem', 'vc_url', 'it_idCategoria', 'it_idAlbum', 'it_idArtista'];

    public  function homemusic()
    {
        $musicas = DB::table('musicas')
            //->join('albuns', 'musicas.it_idAlbum', '=', 'albuns.id')
            ->join('artistas', 'musicas.it_idArtista', '=', 'artistas.id')
            //->join('categorias', 'musicas.it_idCategoria', '=', 'categorias.id')
            ->select(
                'musicas.*',
                //'categorias.vc_nome',
                //'albuns.vc_nome',
                'artistas.vc_nome_artista'  );

        return $musicas;
    }
}

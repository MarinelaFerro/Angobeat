<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Album extends Model
{
    use HasFactory;
    protected $table = 'albuns';
    protected $fillable = ['vc_nome_album', 'vc_imagem_album', 'vc_descricao_album', 'dt_data_de_publicacao_album', 'it_idArtista_album'];

    public  function homealbum()
    {
        $albuns = DB::table('albuns')
        ->join('artistas', 'albuns.it_idArtista_album', '=', 'artistas.id')
        ->select(
            'albuns.*',
            'artistas.vc_nome_artista'
        );

        return $albuns;
    }
}
			
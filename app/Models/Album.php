<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    protected $table = 'albuns';
    protected $fillable = ['vc_nome', 'vc_imagem', 'vc_descricao', 'dt_data_de_publicacao'];
}
			
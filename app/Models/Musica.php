<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musica extends Model
{
    use HasFactory;
    protected $table = 'musicas';
    protected $fillable = ['vc_titulo', 'vc_descricao', 'tm_duracao'];
}
	
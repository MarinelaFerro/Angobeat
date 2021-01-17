<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musicas', function (Blueprint $table) {
            $table->id();
            $table->string('vc_titulo_musica', 255);
            $table->string('vc_descricao_musica', 255);
            $table->string('vc_imagem_musica', 255);
            $table->string('vc_url_musica', 255);
            $table->unsignedBigInteger('it_idCategoria_musica');
            $table->unsignedBigInteger('it_idAlbum_musica')->nullable();

            $table->unsignedBigInteger('it_idArtista_musica');
            $table->foreign('it_idArtista_musica')->references('id')->on('artistas');
            $table->time('tm_duracao_musica', $precision = 0);
            $table->foreign('it_idCategoria_musica')->references('id')->on('categorias');
            $table->foreign('it_idAlbum_musica')->references('id')->on('albuns');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('musicas');
    }
}

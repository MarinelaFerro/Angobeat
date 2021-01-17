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
            $table->string('vc_titulo', 255);
            $table->string('vc_descricao', 255);
            $table->string('vc_imagem', 255);
            $table->string('vc_url', 255);
            $table->unsignedBigInteger('it_idCategoria');
            $table->unsignedBigInteger('it_idAlbum');
            $table->time('tm_duracao', $precision = 0);
            $table->foreign('it_idCategoria')->references('id')->on('categorias')->onDelete('cascade');
            $table->foreign('it_idAlbum')->references('id')->on('albuns')->onDelete('cascade');
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

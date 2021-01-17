<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeguidoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguidores', function (Blueprint $table) {
            $table->id();
            $table->integer('it_seguidores');
            $table->integer('it_siguindo');

            $table->unsignedBigInteger('it_idUtilizador_seguidor');
            $table->foreign('it_idUtilizador_seguidor')->references('id')->on('utilizadores');

            $table->unsignedBigInteger('it_idArtista_seguidor');
            $table->foreign('it_idArtista_seguidor')->references('id')->on('artistas');
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
        Schema::dropIfExists('seguidores');
    }
}

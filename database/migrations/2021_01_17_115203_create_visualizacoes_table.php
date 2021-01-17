<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisualizacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visualizacoes', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('it_idMusica_visualizacao');
            $table->foreign('it_idMusica_visualizacao')->references('id')->on('artistas');


            $table->unsignedBigInteger('it_idUtilizador_visualizacao');
            $table->foreign('it_idUtilizador_visualizacao')->references('id')->on('utilizadores');
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
        Schema::dropIfExists('visualizacoes');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albuns', function (Blueprint $table) {
            $table->id();
            $table->string('vc_nome_album', 100);
            $table->string('vc_imagem_album', 255);
            $table->unsignedBigInteger('it_idArtista_album');
            $table->string('vc_descricao_album', 255);
            $table->date('dt_data_de_publicacao_album');
            
            $table->foreign('it_idArtista_album')->references('id')->on('artistas');
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
        Schema::dropIfExists('albuns');
    }
}

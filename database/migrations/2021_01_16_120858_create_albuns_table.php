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
            $table->string('vc_nome', 100);
            $table->string('vc_imagem', 255);
            $table->unsignedBigInteger('it_idArtista');
            $table->string('vc_descricao', 255);
            $table->date('dt_data_de_publicacao');
            
            $table->foreign('it_idArtista')->references('id')->on('artistas');
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

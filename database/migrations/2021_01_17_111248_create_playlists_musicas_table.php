<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaylistsMusicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playlists_musicas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('it_idMusica');
            $table->unsignedBigInteger('it_idPlaylist');
            $table->foreign('it_idMusica')->references('id')->on('musicas')->onDelete('cascade');
            $table->foreign('it_idPlaylist')->references('id')->on('playlists')->onDelete('cascade');
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
        Schema::dropIfExists('playlists_musicas');
    }
}

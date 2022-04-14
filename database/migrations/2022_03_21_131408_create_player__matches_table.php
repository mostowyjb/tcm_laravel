<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_matches', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('id_matches')->references('id')->on('matches')->onDelete('cascade');
            $table->foreignId('id_player1')->references('id')->on('players')->onDelete('cascade');
            $table->foreignId('id_player2')->references('id')->on('players')->onDelete('cascade');
            $table->boolean('is_double');
            $table->foreignId('id_player1bis')->references('id')->on('players')->onDelete('cascade')->nullable();
            $table->foreignId('id_player2bis')->references('id')->on('players')->onDelete('cascade')->nullable();
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
        Schema::dropIfExists('player_matches');
    }
}

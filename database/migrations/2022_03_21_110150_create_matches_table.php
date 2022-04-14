<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->id()->index()->unsigned()->unique();
            $table->string('category');
            $table->dateTime('date_match');
            $table->integer('set1_a');
            $table->integer('set1_b');
            $table->integer('set2_a');
            $table->integer('set2_b');
            $table->integer('set3_a');
            $table->integer('set3_b');
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
        Schema::dropIfExists('matches');
    }
}

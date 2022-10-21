<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('poster_link');
            $table->string('series_title');
            $table->string('released_year');
            $table->string('runtime');
            $table->string('genre');
            $table->string('imdb_rating');
            $table->text('overview');
            $table->string('director');
            $table->string('star1');
            $table->string('star2');
            $table->string('star3');
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
        Schema::dropIfExists('movie');
    }
};

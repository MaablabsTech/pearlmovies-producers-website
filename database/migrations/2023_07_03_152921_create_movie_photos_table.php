<?php


use Illuminate\Database\Migrations\Migration;

use Illuminate\Database\Schema\Blueprint;

use Illuminate\Support\Facades\Schema;


class CreateMoviePhotosTable extends Migration

{
    public function up()
    {
        Schema::create('movie_photos', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->integer('movie');
            $table->timestamps();
        });
    }

    public function down()

    {
        Schema::dropIfExists('movie_photos');
    }

}
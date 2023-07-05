<?php


use Illuminate\Database\Migrations\Migration;

use Illuminate\Database\Schema\Blueprint;

use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration

{
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('poster_path');
            $table->string('pg_rate');
            $table->integer('is_serie')->nullable();
            $table->integer('is_coming_soon')->nullable();
            $table->integer('rating')->nullable();
            $table->integer('video_quality');
            $table->string('runtime');
            $table->string('country');
            $table->date('release_date');
            $table->string('synopsis');
            $table->integer('status');
            $table->timestamps();
        });

    }

    public function down()

    {
        Schema::dropIfExists('movies');
    }
}

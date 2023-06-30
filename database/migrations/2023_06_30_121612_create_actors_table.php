<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('actors', function (Blueprint $table) {
            $table->id();
            
            $table->string('name');

            $table->string('slug');

            $table->string('career', 255);

            $table->string('height', 255)->nullable();

            $table->dateTime('date_of_birth')->nullable();

            $table->string('place_of_birth')->nullable();

            $table->string('zodiac', 255)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actors');
    }
};

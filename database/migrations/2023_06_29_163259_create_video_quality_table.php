<?php



use Illuminate\Database\Migrations\Migration;

use Illuminate\Database\Schema\Blueprint;

use Illuminate\Support\Facades\Schema;



class CreateVideoQualityTable extends Migration

{

    public function up()

    {

        Schema::create('video_quality', function (Blueprint $table) {

            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->timestamps();
        });

    }



    public function down()

    {

        Schema::dropIfExists('video_quality');

    }

}
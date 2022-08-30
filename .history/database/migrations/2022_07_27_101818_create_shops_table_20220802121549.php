<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('name', 100);
            $table->bigInteger('area_id')->unsigned();
            $table->bigInteger('genre_id')->unsigned();
            $table->string('comment',256);
            $table->string('image_url',3000);
        });
    }

    public function down()
    {
        Schema::dropIfExists('shops');
    }
}

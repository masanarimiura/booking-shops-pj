<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('shop_id')->unsigned();
            $table->string('name', 100);
            $table->string('area', 100);
            $table->string('genre', 100);
            $table->string('comment',256);
        });
    }

    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}

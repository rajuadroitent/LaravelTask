<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCityBikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('city_bikes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('stationName');
            $table->integer('availableDocks');
            $table->integer('totalDocks');
            $table->double('latitude');
            $table->double('longitude');
            $table->string('statusValue');
            $table->integer('statusKey');
            $table->integer('availableBikes');
            $table->string('stAddress1');
            $table->string('stAddress2');
            $table->string('city');
            $table->string('postalCode');
            $table->string('location');
            $table->string('altitude');
            $table->boolean('testStation');
            $table->dateTime('lastCommunicationTime');
            $table->string('landMark');
            $table->rememberToken();
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
        Schema::drop('city_bikes');
    }
}

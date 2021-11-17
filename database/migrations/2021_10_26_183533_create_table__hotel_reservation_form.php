<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableHotelReservationForm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotelreservationform', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('address');
            $table->integer('TelephoneNo')->nullable();
            $table->string('Email')->nullable();
            $table->string('Accompanyingperson/s')->nullable();
            $table->string('Roomtype');
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
        Schema::dropIfExists('hotelreservationform');
    }
}

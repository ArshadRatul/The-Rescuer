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
        Schema::create('fire_station_t', function (Blueprint $table) {
            $table->id('f_station_id');
            $table->string('username')->unique();
            $table->string('name');
            $table->string('password');
            $table->integer('contact_number');
            $table->BigInteger('address_id')->unsigned();
            $table->foreign('address_id')->references('address_id')->on('address_t')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fire_station_t');
    }
};
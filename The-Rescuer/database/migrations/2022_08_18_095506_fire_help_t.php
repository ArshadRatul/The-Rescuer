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
        Schema::create('fire_help_t', function (Blueprint $table) {
            $table->id('complain_id');
            $table->BigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('user_id')->on('user_t')->onDelete('cascade');
            $table->BigInteger('f_station_id')->unsigned();
            $table->foreign('f_station_id')->references('f_station_id')->on('fire_station_t')->onDelete('cascade');
            $table->BigInteger('current_location')->unsigned();
            $table->foreign('current_location')->references('address_id')->on('address_t')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fire_help_t');
    }
};
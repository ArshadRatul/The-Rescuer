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
        Schema::create('police_t', function (Blueprint $table) {
            $table->id('police_id');
            $table->string('fname');
            $table->string('lname');
            $table->string('username')->unique();
            $table->string('password');
            $table->integer('contact_number');
            $table->string('positon');
            $table->BigInteger('p_station_id')->unsigned();
            $table->foreign('p_station_id')->references('p_station_id')->on('police_station_t')->onDelete('cascade');
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('police_t');
    }
};
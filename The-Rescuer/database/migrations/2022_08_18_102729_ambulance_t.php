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
        Schema::create('ambulance_t', function (Blueprint $table) {
            $table->id('ambulance_id');
            $table->string('driver_name');
            $table->string('ambulance_number');
            $table->string('username')->unique();
            $table->string('password');
            $table->integer('contact_number');
            $table->BigInteger('hospital_id')->unsigned();
            $table->foreign('hospital_id')->references('hospital_id')->on('hospital_t')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ambulance_t');
    }
};
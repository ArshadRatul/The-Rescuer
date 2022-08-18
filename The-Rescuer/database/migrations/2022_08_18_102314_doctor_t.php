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
        Schema::create('doctor_t', function (Blueprint $table) {
            $table->id('doctor_id');
            $table->string('fname');
            $table->string('lname');
            $table->string('username')->unique();
            $table->string('password');
            $table->integer('contact_number');
            $table->string('department');
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
        Schema::dropIfExists('doctor_t');
    }
};
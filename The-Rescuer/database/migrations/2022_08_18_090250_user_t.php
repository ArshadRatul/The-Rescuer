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
        Schema::create('user_t', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('fname');
            $table->string('lname');
            $table->string('username')->unique();
            $table->string('password');
            $table->integer('nid');
            $table->date('dob');
            $table->integer('contact_number');
            $table->string('email');
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
        Schema::dropIfExists('user_t');
    }
};
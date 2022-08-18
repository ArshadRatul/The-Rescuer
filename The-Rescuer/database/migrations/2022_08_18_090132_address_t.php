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
        Schema::create('address_t', function (Blueprint $table) {
            $table->id('address_id');
            $table->string('house_no',5);
            $table->string('road');
            $table->string('area');
            $table->string('city');
            $table->integer('zip');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('address_t');
    }
};

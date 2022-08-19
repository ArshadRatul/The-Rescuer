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
        Schema::create('appointment_t_s', function (Blueprint $table) {
            $table->id();
            $table->string('Age');
            $table->string('ContactNumber');
            $table->string('Address');
            $table->string('AppointmentType');
            $table->string('gender');
            $table->string('PatientName');
            $table->string('status');
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
        Schema::dropIfExists('appointment_t_s');
    }
};

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('medical_appointments', function (Blueprint $table) {
          $table->increments('id');
          $table->date('date');
          $table->time('hour')->unique();
          $table->text('description');
          $table->bigInteger('patient_id')->unsigned();
          $table->foreign('patient_id')->references('id')->on('patients')->onUpdate('cascade')->onDelete('cascade');
          $table->bigInteger('professional_id')->unsigned();
          $table->foreign('professional_id')->references('id')->on('professionals')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::drop('medical_appointments');
    }
}

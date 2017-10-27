<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('schedules', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->bigInteger('patient_id')->unsigned();
          $table->foreign('patient_id')->references('id')->on('patients')->onUpdate('cascade')->onDelete('cascade');
          $table->bigInteger('professional_id')->unsigned();
          $table->foreign('professional_id')->references('id')->on('professionals')->onUpdate('cascade')->onDelete('cascade');
          $table->date('date');
          $table->time('hour');
          $table->integer('status');
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
        Schema::drop('schedules');
    }
}

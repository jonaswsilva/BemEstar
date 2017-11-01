<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('sessions', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('number_of_session');
          $table->date('date');
          $table->time('hour');
          $table->text('description');
          $table->integer('medicalrecord_id')->unsigned();
          $table->foreign('medicalrecord_id')->references('id')->on('medical_records')->onUpdate('cascade')->onDelete('cascade');
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
      Schema::drop('sessions');
    }
}

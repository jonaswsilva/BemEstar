<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('father');
            $table->string('mother');
            $table->date('birth_date');
            $table->string('spouce');
            $table->string('avatar')->default('default.jpg');
            $table->bigInteger('person_id')->unsigned();
            $table->foreign('person_id')->references('id')->on('person')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('address_id')->unsigned();
            $table->foreign('address_id')->references('id')->on('addresses')->onUpdate('cascade')->onDelete('cascade');
            $table->rememberToken();
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
        Schema::drop('patients');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePosturalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posturals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('medicalappointment_id');
            $table->text("comment")->nullable();
            $table->string("head")->nullable();
              $table->string("cerv")->nullable();
              $table->string("omb")->nullable();
              $table->string("escd")->nullable();
              $table->string("esce")->nullable();
              $table->string("dorsp")->nullable();
              $table->string("tritp")->nullable();
              $table->string("gmach")->nullable();
              $table->string("crip")->nullable();
              $table->string("preg")->nullable();
              $table->string("joel")->nullable();
              $table->string("pregp")->nullable();
              $table->string("retrop")->nullable();
              $table->string("heada")->nullable();
              $table->string("clava")->nullable();
              $table->string("gladc")->nullable();
              $table->string("ombra")->nullable();
              $table->string("trit")->nullable();
              $table->string("rott")->nullable();
              $table->string("cri")->nullable();
              $table->string("rotp")->nullable();
              $table->string("joelhva")->nullable();
              $table->string("palet")->nullable();
              $table->string("antp")->nullable();
              $table->string("headl")->nullable();
              $table->string("cervc")->nullable();
              $table->string("ombr")->nullable();
              $table->string("ms")->nullable();
              $table->string("abdo")->nullable();
              $table->string("dorsal")->nullable();
              $table->string("lombar")->nullable();
              $table->string("pelve")->nullable();
              $table->string("joelh")->nullable();
              $table->string("medp")->nullable();
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
        Schema::drop('posturals');
    }
}

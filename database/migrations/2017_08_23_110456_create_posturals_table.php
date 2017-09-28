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
            $table->text("comment");
            $table->string("head");
              $table->string("cerv");
              $table->string("omb");
              $table->string("escd");
              $table->string("esce");
              $table->string("dorsp");
              $table->string("tritp");
              $table->string("gmach");
              $table->string("crip");
              $table->string("preg");
              $table->string("joel");
              $table->string("pregp");
              $table->string("retrop");
              $table->string("heada");
              $table->string("clava");
              $table->string("gladc");
              $table->string("ombra");
              $table->string("trit");
              $table->string("rott");
              $table->string("cri");
              $table->string("rotp");
              $table->string("joelhva");
              $table->string("palet");
              $table->string("antp");
              $table->string("headl");
              $table->string("cervc");
              $table->string("ombr");
              $table->string("ms");
              $table->string("abdo");
              $table->string("dorsal");
              $table->string("lombar");
              $table->string("pelve");
              $table->string("joelh");
              $table->string("medp");
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

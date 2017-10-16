<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNeurologicalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('neurologicals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('medicalappointment_id');
            $table->string('histp')->nullable();
            $table->string('hista');
            $table->string('histf');
            $table->string('focf');
            $table->string('foml');
            $table->string('prot');
            $table->string('ort');
            $table->string('padrm');
            $table->string('condp');
            $table->string('tonb');
            $table->string('distt');
            $table->string('grad');
            $table->string('testc');
            $table->string('mobil');
            $table->string('estab');
            $table->string('march');
            $table->string('estabh');
            $table->string('caracd');
            $table->string('motf');
            $table->string('mao');
            $table->string('extfp');
            $table->string('abad');
            $table->string('rotie');
            $table->string('extfc');
            $table->string('extefp');
            $table->string('pros');
            $table->string('extfq');
            $table->string('abadq');
            $table->string('rotaie');
            $table->string('extfj');
            $table->string('invt');
            $table->string('pladt');
            $table->string('senss');
            $table->string('sensp');
            $table->string('cortc');
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
        Schema::drop('neurologicals');
    }
}

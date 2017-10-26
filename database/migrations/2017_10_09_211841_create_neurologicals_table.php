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
            $table->string('hista')->nullable();
            $table->string('histf')->nullable();
            $table->string('focf')->nullable();
            $table->string('foml')->nullable();
            $table->string('prot')->nullable();
            $table->string('ort')->nullable();
            $table->string('padrm')->nullable();
            $table->string('condp')->nullable();
            $table->string('tonb')->nullable();
            $table->string('distt')->nullable();
            $table->string('grad')->nullable();
            $table->string('testc')->nullable();
            $table->string('mobil')->nullable();
            $table->string('estab')->nullable();
            $table->string('march')->nullable();
            $table->string('estabh')->nullable();
            $table->string('caracd')->nullable();
            $table->string('motf')->nullable();
            $table->string('mao')->nullable();
            $table->string('extfp')->nullable();
            $table->string('abad')->nullable();
            $table->string('rotie')->nullable();
            $table->string('extfc')->nullable();
            $table->string('extefp')->nullable();
            $table->string('pros')->nullable();
            $table->string('extfq')->nullable();
            $table->string('abadq')->nullable();
            $table->string('rotaie')->nullable();
            $table->string('extfj')->nullable();
            $table->string('invt')->nullable();
            $table->string('pladt')->nullable();
            $table->string('senss')->nullable();
            $table->string('sensp')->nullable();
            $table->string('cortc')->nullable();
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

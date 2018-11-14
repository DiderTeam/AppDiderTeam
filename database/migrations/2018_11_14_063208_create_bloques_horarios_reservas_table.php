<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBloquesHorariosReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bloquesHorarios_reservas', function (Blueprint $table) {
            $table->integer('idBloqueHorario')->unsigned();
            $table->foreign('idBloqueHorario')->references('id')->on('bloque_horarios');
            $table->integer('idReserva')->unsigned();
            $table->foreign('idReserva')->references('id')->on('reservas');
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
        Schema::dropIfExists('bloquesHorarios_reservas');
    }
}

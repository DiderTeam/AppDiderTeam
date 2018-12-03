<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fechasolicitud');
            $table->integer('idCanchas')->unsigned();
            $table->foreign('idCanchas')->references('id')->on('canchas');
            $table->integer('idDatosUsuario')->unsigned();
            $table->foreign('idDatosUsuario')->references('id')->on('datos_usuarios');
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
        Schema::dropIfExists('reservas');
    }
}

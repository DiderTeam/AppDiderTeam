<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBloqueHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bloque_horarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('horarioinicio');
            $table->string('horariofinal');
            $table->boolean('reservado');
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
        Schema::dropIfExists('bloque_horarios');
    }
}

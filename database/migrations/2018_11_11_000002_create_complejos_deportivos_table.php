<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComplejosDeportivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complejos_deportivos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->time('horarioInicio');
            $table->time('horarioFinal');
            $table->string('direccion');
            $table->string('coordenada');
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
        Schema::dropIfExists('complejos_deportivos');
    }
}

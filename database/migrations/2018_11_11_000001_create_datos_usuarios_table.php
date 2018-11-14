<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rut');
            $table->string('nombre');
            $table->string('telefono');
            $table->enum('rol',['Administrador','Delegados','Alumno']);
            $table->string('carrera');
            $table->boolean('bloqueado');
            $table->integer('idUser')->unsigned();
            $table->foreign('idUser')->references('id')->on('users');
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
        Schema::dropIfExists('datos_usuarios');
    }
}

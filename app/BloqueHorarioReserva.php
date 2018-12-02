<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BloqueHorarioReserva extends Model
{
    protected $table = 'bloque_horarios_reservas';
    protected $fillable = ['idBloqueHorario','idReserva'];

    public function reserva(){
        return $this->hasMany('App\Reserva');
    }

    public function bloqueHorario(){
        return $this->hasMany('App\BloqueHorario');
    }
}

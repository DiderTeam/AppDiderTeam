<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BloqueHorario extends Model
{    
    protected $table = 'bloque_horarios';
    protected $primaryKey = 'id';
    protected $fillable = ['bloqueInicio','bloqueFinal'];

    public function reservas()
    {
        return $this->belongsToMany('App\Reserva');
    }
}

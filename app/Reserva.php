<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $table = 'reservas';
    protected $primaryKey = 'id';
    protected $fillable = ['fechasolicitud','idCanchas','idUser'];

    public function bloqueHorarios()
    {
        return $this->belongsToMany('App\BloqueHorario');
    }

    public function users(){
        return $this->hasMany('App\User');
    }

    public function cancha(){
        return $this->hasMany('App\Cancha');
    }    
}

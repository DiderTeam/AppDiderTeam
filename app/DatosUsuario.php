<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatosUsuario extends Model
{
    protected $table = 'datos_usuarios';
    protected $primaryKey  = 'id';
    protected $fillable = ['rut','nombre','telefono','bloqueado'];

    public function User(){
        return $this->hasOne('App\User');
    }
}
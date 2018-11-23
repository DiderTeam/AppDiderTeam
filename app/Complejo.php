<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// Aca puede estar el problema de impresion de datos por vistas

class Complejo extends Model
{
    protected $table = 'complejos_deportivos';
    protected $primaryKey  = 'id';
    protected $fillable = ['nombre','direccion','coordenadas'];
}

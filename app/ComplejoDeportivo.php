<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComplejoDeportivo extends Model
{
    public $table = 'complejo_deportivo';
    public $primaryKey  = 'id';
    public $fillable = ['nombre','direccion','coordenadas'];

   // public function Canchas(){
    //    return $this->hasMany(Canchas::class);
    //}
}

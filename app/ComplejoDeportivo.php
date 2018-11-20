<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComplejoDeportivo extends Model
{
    protected $table = 'complejo_deportivo';
    protected $primaryKey  = 'id';
    protected $fillable = ['nombre','direccion','coordenadas'];

    public function Canchas(){
        return $this->hasMany(Canchas::class);
    }

    public function 
}

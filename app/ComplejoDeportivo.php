<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComplejoDeportivo extends Model
{
    protected $table = 'complejos_deportivos';
    protected $primaryKey  = 'id';
    protected $fillable = ['nombre','direccion','coordenadas'];

    public function Canchas(){
        return $this->hasMany(Canchas::class);
    }
}

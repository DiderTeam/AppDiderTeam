<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ComplejoDeportivo as ComplejoDeportivo;

class Cancha extends Model
{
    protected $table = 'canchas';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre','disponible','idComplejoDeportivo'];

    public function ComplejoDeportivo(){
        return $this->belongsTo('ComplejoDeportivo','idComplejoDeportivo');
    }

}
 
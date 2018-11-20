<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cancha extends Model
{
    protected $table = 'canchas';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre','disponible'];

    public function ComplejoDeportivo(){
        return $this->belongsTo(Canchas::class);
    }

}

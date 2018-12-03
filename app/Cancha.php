<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ComplejoDeportivo as ComplejoDeportivo;

class Cancha extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','nombre', 'disponible', 'idComplejoDeportivo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $table = 'canchas';
    protected $primaryKey = 'id';
    //protected $fillable = ['nombre','disponible','idComplejoDeportivo'];

    public function ComplejoDeportivo(){
        return $this->belongsTo('ComplejoDeportivo','idComplejoDeportivo');
    }

}
 

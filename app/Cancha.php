<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Cancha extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */protected $table = 'canchas';
    protected $fillable = [
        'id','nombre', 'disponible', 'idComplejoDeportivo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    /*
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $table = 'canchas';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre','disponible'];

    public function ComplejoDeportivo(){
        return $this->belongsTo('App\ComplejoDeportivo');
        
    }
    */
}
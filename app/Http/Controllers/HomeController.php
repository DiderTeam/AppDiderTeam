<?php

namespace App\Http\Controllers;

use Illuminate\Support\Request;
use Illuminate\Http\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\User as User;
use App\ComplejoDeportivo as ComplejoDeportivo;
use App\Cancha as Cancha;
use App\DatosUsuario as DatosUsuario;
use App\BloqueHorario as BloqueHorario;
use App\Reserva as Reserva;
use App\BloqueHorarioReserva as BloqueHorarioReserva;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$ejem = DB::table('bloque_horarios')->where('bloqueInicio','>=',$min)->where('bloqueFinal','<=',$max)->join('bloqueshorarios_reservas','bloqueshorarios_reservas.idBloqueHorario','=','bloque_horarios.id')->where('bloqueshorarios_reservas.idReserva','=',$idReserva)->get(array('bloqueInicio','bloqueFinal'));
        //dd($ejem);    
        $complejosDeportivos = ComplejoDeportivo::all();
        return view('vistasDelegados.home',compact('complejosDeportivos'));
    }
    public function canchas($idComplejoDeportivo) 
    {
        $canchas = Cancha::where('idComplejoDeportivo','=',$idComplejoDeportivo)->get();
        return response()->json($canchas);
    }
    public function infoDelegado()
    {
        $idActual = auth()->user()->id;
        $delegadoActual = DatosUsuario::where('idUser','=',$idActual)->get();
        return view('vistasDelegados.infoDelegado',compact('delegadoActual'));
    }
    public function HistorialReservas()
    {
        $users = User::all();
        return view('vistasDelegados.HistorialReservas',compact('users'));
    }
    public function bloquesHorarios($fechasolicitada,$idComplejoDeportivo)
    {
        $idReservas = Reserva::where('fechasolicitud','=',$fechasolicitada)->join('canchas','canchas.id','=','reservas.idCanchas')->where('canchas.idComplejoDeportivo','=',$idComplejoDeportivo)->get(array('reservas.id'));
        //$idReserva=1;
        $min = ComplejoDeportivo::where('id','=',$idComplejoDeportivo)->min('horarioInicio');
        $max= ComplejoDeportivo::where('id','=',$idComplejoDeportivo)->max('horarioFinal');
        //$ejem = DB::table('bloque_horarios')->where('bloqueInicio','>=',$min)->where('bloqueFinal','<=',$max)->join('bloqueshorarios_reservas','bloqueshorarios_reservas.idBloqueHorario','=','bloque_horarios.id')->where('bloqueshorarios_reservas.idReserva','=',$idReserva)->get(array('bloqueInicio','bloqueFinal'));
        //dd($ejem);    
        $flag=true;
        $horarios=array();
        foreach($idReservas as $key => $value){
                $horarios = array_push(DB::table('bloque_horarios')->where('bloqueInicio','>=',$min)->where('bloqueFinal','<=',$max)->join('bloqueshorarios_reservas','bloqueshorarios_reservas.idBloqueHorario','=','bloque_horarios.id')->where('bloqueshorarios_reservas.idReserva','=',$value->id)->get(array('bloqueInicio','bloqueFinal')));                
            }
        $bloques=BloqueHorario::where('bloqueInicio','>=',$min)->where('bloqueFinal','<=',$max)->get(array('bloqueInicio','bloqueFinal'));
        $cargabloques=array($horarios,$bloques,$idReservas);
        return response()->json($cargabloques);
    }
    /*
    public function VistaAdmin()
    {
        return view('vistasAdmin.indexAdmin');
    }
    */
    
}
}
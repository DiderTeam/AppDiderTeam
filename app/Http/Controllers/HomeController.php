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
use App\BloquesHorarioReserva as BloqueHorarioReserva;

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
    public function bloquesHorarios($fechasolicitada)
    {
        $fecha = $fechasolicitada->format('d-m-Y'); //No carga la funcion format
        $idReservas = Reserva::where('fechasolicitud ','=',$fecha)->pluck('id');
        $horarios = BloqueHorarioReserva::where('idReserva','=',$idReservas)->join('bloques_horarios')->pluck('horarioInicio','horarioFinal');
        return response()->json($horarios);
    }
    /*
    public function VistaAdmin()
    {
        return view('vistasAdmin.indexAdmin');
    }
    */
    
}

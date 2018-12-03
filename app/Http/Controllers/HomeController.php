<?php

namespace App\Http\Controllers;

use Illuminate\Support\Request;
use Illuminate\Http\Facades\Input;
use Illuminate\Support\Facades\DB;
use App\User as User;
use App\ComplejoDeportivo as ComplejoDeportivo;
use App\Cancha as Cancha;
use App\DatosUsuario as DatosUsuario;

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
        $users = auth()->user();
        return view('vistasDelegados.infoDelegado',compact('users'));
    }
    public function HistorialReservas()
    {
        $users = User::all();
        return view('vistasDelegados.HistorialReservas',compact('users'));
    }
    /*
    public function VistaAdmin()
    {
        return view('vistasAdmin.indexAdmin');
    }
    */
    
}

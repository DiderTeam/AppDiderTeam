<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
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
        $canchas = Cancha::all();
        return view('vistasDelegados.home',compact('complejosDeportivos','canchas'));
    }
    public function infoDelegado()
    {
        $idActual = auth()->user()->id;
        $infoDelegado = DatosUsuario::where('idUser','=',$idActual)->get();
        return view('vistasDelegados.infoAdmin',compact('infoDelegado'));
    }
    public function HistorialReservas()
    {
        $users = User::all();
        return view('vistasDelegados.HistorialReservas',compact('users'));
    }
    public function VistaAdmin()
    {
        return view('vistasAdmin.indexAdmin');
    }
    
}

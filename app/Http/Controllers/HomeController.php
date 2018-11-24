<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User as User;
use App\ComplejoDeportivo as ComplejoDeportivo;
use App\Cancha as Cancha;

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
    public function canchas()
    {
        $idComplejoDeportivo = Input::get('idComplejoDeportivo');
        $canchas = Cancha::where('idComplejoDeportivo','=',$idComplejoDeportivo)->get();
        return response()->json($canchas);
    }
    public function infoDelegado()
    {
        return view('vistasDelegados.infoAdmin');
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

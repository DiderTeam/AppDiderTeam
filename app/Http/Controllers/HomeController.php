<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as User;

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
        return view('vistasDelegados.home');
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

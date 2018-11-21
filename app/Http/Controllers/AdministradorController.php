<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministradorController extends Controller
{

    public function Perfil()
    {
        return view('vistasAdmin.admin');
    }
    public function delegado()
    {
        return view('vistasAdmin.gestiondelegado');
    }
    public function canchas()
    {
        return view('vistasAdmin.gestioncanchas');
    }
    public function porcentajeuso()
    {
        return view('vistasAdmin.porcentajeuso');
    }
     public function informacion()
     {
        return view('vistasAdmin.gestioninformacion');
     }
}

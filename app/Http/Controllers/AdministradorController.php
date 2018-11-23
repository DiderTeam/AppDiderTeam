<?php

namespace  App\Http\Controllers;
use App\User as User;

class AdministradorController extends Controller
{
   

  
    public function Perfil()
    {
        return view('vistaAdministrador.admin');
    }

    public function listadelegado()
    {
        $users = User::all();
        return view('vistaAdministrador.listadelegado',compact('users'));
    }
    public function delegado()
    {
        return view('vistaAdministrador.gestiondelegado');
    }

    public function canchas()
    {
        return view('vistaAdministrador.gestioncanchas');
    }

    public function porcentajeuso()
    {
        return view('vistaAdministrador.porcentajeuso');
    }
     public function informacion()
     {
         return view('vistaAdministrador.gestioninformacion');
     }

     public function agregarcancha()
     {
         return view('vistaAdministrador.agregarcancha');
     }
 
     public function modificarcancha()
     {
         return view('vistaAdministrador.modificarcancha');
     }
     public function eliminarcancha()
     {
         return view('vistaAdministrador.eliminarcancha');
     }
   
  
     public function agregarreglamento()
     {
         return view('vistaAdministrador.agregarreglamento');
     }

     public function modificarreglamento()
     {
         return view('vistaAdministrador.modificarreglamento');
     }


 

    }


    
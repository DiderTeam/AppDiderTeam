<?php

namespace  App\Http\Controllers;

class AdministradorController extends Controller
{
   

  
    public function Perfil()
    {
        return view('vistaAdministrador.admin');
    }

    public function listadelegado()
    {
        return view('vistaAdministrador.listadelegado');
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


    
<?php

namespace  App\Http\Controllers;
use App\User as User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


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

    public function creardelegado()
    {
        return view('vistaAdministrador.creardelegado');
    }

    public function agregardelegado(Request $request)
    {
        
        
       User::create([

          'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input(['password']))

        ]);
       
        return redirect()->back()->withSuccess('Delegado Agregado');
    }
    
    public function actualizardelegado(request $request )
    {
      // dd($request->get("email"));
        $users = User::find($request->get("id"));
        //$users->name =$request->name;
        //$users->email =$request->email;
        //$users->password =$request->password;
        //$users->save();
return view("vistaAdministrador.editardelegado")->with('users', $users);

    }
    
    public function update1(Request $request)
    {
        //dd($request->get("name"));
        $users = User::find($request->get("id"));
        $users->name = $request->get("name");
        $users->password = $request->get("password");
        $users->email = $request->get("email");
        $users->save();
        return redirect()->back()->withSuccess('Delegado Actualizado');

    }
    public function destroye1($id)
    {
        $users=User::find($id);
        User::destroy($id);
       // Session::flash('message','El delegado fue eliminado');
      
        return redirect()->back()->withSuccess('Delegado Eliminado');
        //date_default_timezone_set('America/Santiago');
        //$users = User::find($id);


       // $user=User::where('id', $id)->update(['active'=>'0']);

       // return redirect()->back()->withSuccess('Colaborador Borrado');

    }
    
    public function eliminardelegado()
    {
        return view('vistaAdministrador.eliminardelegado');
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

    
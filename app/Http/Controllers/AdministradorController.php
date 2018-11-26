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
        return view('vistasAdmin.admin');
    }
    public function listadelegado()
    {
        $users = User::all();
        return view('vistasAdmin.listadelegado',compact('users'));
    }
    public function delegado()
    {
        return view('vistasAdmin.gestiondelegado');
    }

    public function creardelegado()
    {
        return view('vistasAdmin.creardelegado');
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
        return view("vistasAdmin.editardelegado")->with('users', $users);

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
        return view('vistasAdmin.eliminardelegado');
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

     public function agregarcancha()
     {
         return view('vistasAdmin.agregarcancha');
     }
 
     public function modificarcancha()
     {
         return view('vistasAdmin.modificarcancha');
     }
     public function eliminarcancha()
     {
         return view('vistasAdmin.eliminarcancha');
     }
     public function agregarreglamento()
     {
         return view('vistasAdmin.agregarreglamento');
     }

     public function modificarreglamento()
     {
         return view('vistasAdmin.modificarreglamento');
     }

}


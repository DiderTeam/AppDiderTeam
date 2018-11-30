<?php

namespace  App\Http\Controllers;
use App\User as User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\ComplejoDeportivo as Complejo;
use Illuminate\Support\Facades\Auth;
use App\Cancha as Cancha;
use App\BloqueHorario as Horario;

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
    
        

    public function editarperfildelegado()
    {
        return view('vistasDelegados.editarperfildelegado');
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
    
    public function actualizarperfil(request $request )
    {
        
       //dd($request->get("id"));
        $users = User::find($request->get("id"));
        //$users->name =$request->name;
        //$users->email =$request->email;
        //$users->password =$request->password;
        //$users->save();
        return view("vistasDelegados.editarperfildelegado")->with('users', $users);

    }

    public function update2(Request $request)
    {
        //dd($request->get("name"));
        $users = User::find($request->get("id"));
        $users->name = $request->get("name");
        $users->password = $request->get("password");
        $users->email = $request->get("email");
        $users->save();
        return redirect()->back()->withSuccess('Ha actualizado su perfil');

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

     public function irperfil()
{
    $aux= User::all('name', 'id', 'password' ,'email');
    if (Auth::User()->id == '1') {
        return view('vistasAdmin.listadelegado')->with('users', $aux);
    } else {
        return view('vistasDelegados.historialReservas')->with('users', $aux);
    }
}
//Canchas
public function crearCancha()
{
    return view('vistasAdmin.agregarcancha');
}

public function listaCanchas()
{
    $canchas = Cancha::all();
    $complejos =Complejo::all();
    return view('vistasAdmin.listacanchas',compact('canchas'),compact('complejos'));
}

public function agregarCanchaBD(Request $request)
    {
       Cancha::create([

            'nombre' => $request->input('nombre'),
            'disponible' => $request->input('disponible'),
            'idComplejoDeportivo' => $request->input('idComplejoDeportivo'),
            
        ]);
       
        return redirect()->back()->withSuccess('Cancha Agregada');
    }

    public function editarCancha(request $request )
    {
      // dd($request->get("email"));
        $canchas = Cancha::find($request->get("id"));
        /*$canchas->nombre =$request->name;
        $canchas->disponible =$request->email;
        $canchas->idComplejoDeportivo =$request->idComplejoDeportivo;
        $canchas->save();
        */
        return view("vistasAdmin.modificarcancha")->with('canchas', $canchas);
    }

    public function editarCanchaBD(Request $request)
    {
        //dd($request->get("name"));
        $canchas = Cancha::find($request->get("id"));
        $canchas->nombre =$request->get("nombre");
        $canchas->disponible =$request->get("disponible");
        $canchas->idComplejoDeportivo =$request->get("idComplejoDeportivo");
        $canchas->save();

        return redirect()->back()->withSuccess('Cancha Actualizado');

    }

    public function destroyeCancha($id)
    {
        $canchas=Cancha::find($id);
        Cancha::destroy($id);
       // Session::flash('message','El delegado fue eliminado');
        return redirect()->back()->withSuccess('Cancha eliminada con exito');
        //date_default_timezone_set('America/Santiago');
        //$users = User::find($id);
       // $user=User::where('id', $id)->update(['active'=>'0']);
       // return redirect()->back()->withSuccess('Colaborador Borrado');
    }


    //HORARIOS

    public function listaHorarios()
{
    $horarios = Horario::all();
    return view('vistasAdmin.listaHorarios',compact('horarios'));
}

    public function crearhorario()
{
    return view('vistasAdmin.crearhorario');
}

    public function agregarhorario(Request $request)
    {
       Horario::create([

            'horarioinicio' => $request->input('horarioinicio'),
            'horariofinal' => $request->input('horariofinal'),
            'reservado' => $request->input('reservado'),
            'idCancha' => $request->input('idCancha'),
            
        ]);
       
        return redirect()->back()->withSuccess('Horario Agregado con exito!');
    }


}


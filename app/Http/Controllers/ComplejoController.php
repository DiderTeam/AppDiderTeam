<?php

namespace App\Http\Controllers;

use App\ComplejoDeportivo as Complejo;
use App\Cancha as Cancha;
use Illuminate\Http\Request;

class ComplejoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
    }
    public function destroyecomplejo($id)
    {
        $complejo=Complejo::find($id);
        Complejo::destroy($id);
       // Session::flash('message','El delegado fue eliminado');
        return redirect()->back()->withSuccess('Complejo Eliminado');
        //date_default_timezone_set('America/Santiago');
        //$users = User::find($id);
       // $user=User::where('id', $id)->update(['active'=>'0']);
       // return redirect()->back()->withSuccess('Colaborador Borrado');
    }
    public function complejo()
    {
        return view('vistasAdmin.gestioncomplejodeportivo');
    }
    public function listacomplejo()
    {
        $complejos = Complejo::all();
        return view('vistasAdmin.gestioncomplejodeportivo',compact('complejos'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crearcomplejo()
    {
        return view('vistasAdmin.crearnuevocomplejo');
    }

    public function agregarcomplejo(Request $request)
    {
       Complejo::create([

          'nombre' => $request->input('nombre'),
        'direccion' => $request->input('direccion'),
        'coordenada' =>$request->input('coordenada')
        ]);
       
        return redirect()->back()->withSuccess('Complejo agregado');
       }    
    public function actualizarcomplejo(request $request )
    {
      //dd($request->get("email"));
        $complejos = Complejo::find($request->get("id"));
     
        //$users->name =$request->name;
        //$users->email =$request->email;
        //$users->password =$request->password;
        //$users->save();
        return view("vistasAdmin.editarcomplejos")->with('complejos', $complejos);

    }
    public function updatecomplejo(Request $request)
    {
        //dd($request->get("name"));
        $complejos = Complejo::find($request->get("id"));
        $complejos->nombre = $request->get("nombre");
        $complejos->direccion= $request->get("direccion");
        $complejos->save();
        return redirect()->back()->withSuccess('complejo actualizado');

    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Complejo  $complejo
     * @return \Illuminate\Http\Response
     */
    public function show(Complejo $complejo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Complejo  $complejo
     * @return \Illuminate\Http\Response
     */
    public function edit(Complejo $complejo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Complejo  $complejo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Complejo $complejo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Complejo  $complejo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Complejo $complejo)
    {
        //
    }
}

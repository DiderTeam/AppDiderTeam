<?php
namespace App\Http\Controllers;
use App\ComplejoDeportivo as ComplejoDeportivo;
use Illuminate\Http\Request;
class ComplejoDeportivoController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     public function select(){
        $data=DB::table('complejos_deportivos')->get();
        return view('vistasDelegados.home')->with('data',$data);
     }

     public function postSelect(Request $request)
     {
        dd($request->all());
     }
     public function index()
    {
        $complejosDeportivos = ComplejoDeportivo::all();
        dd($complejosDeportivos);
        echo("hola mundo");
        return View('vistasDelegados.home',compact('complejosDeportivos'));
    }
    public function llenadoComplejo()
    {
        $complejoDeportivo  = ComplejoDeportivo::all();
        return View('vistasDelegados.home',compact('complejosDeportivos'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $complejosDeportivos = new App\ComplejoDeportivo;
        $complejosDeportivos->create($request->all());
        return redirect('complejosDeportivos');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\ComplejoDeportivo  $complejosDeportivos
     * @return \Illuminate\Http\Response
     */
    public function show(ComplejoDeportivo $complejoDeportivo)
    {
        $data = \DB::select('SELECT * FROM complejos_deportivos');
        return view( 'home' )
        ->with( 'complejos_deportivos
        ', $data );
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ComplejoDeportivo  $complejoDeportivo
     * @return \Illuminate\Http\Response
     */
    public function edit(ComplejoDeportivo $complejoDeportivo)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ComplejoDeportivo  $complejoDeportivo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ComplejoDeportivo $complejoDeportivo)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ComplejoDeportivo  $complejoDeportivo
     * @return \Illuminate\Http\Response
     */
    public function destroy(ComplejoDeportivo $complejoDeportivo)
    {
        //
    }
}
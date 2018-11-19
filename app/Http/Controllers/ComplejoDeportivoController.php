<?php

namespace App\Http\Controllers;

use App\ComplejoDeportivo;
use Illuminate\Http\Request;

class ComplejoDeportivoController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $complejosDeportivos = ComplejoDeportivo::all(); 
        return \View::make('vistasDelegados',compact('complejosDeportivos'));
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
        //
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

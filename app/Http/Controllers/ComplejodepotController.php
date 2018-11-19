<?php

namespace App\Http\Controllers;

use App\complejodepot;
use Illuminate\Http\Request;

class ComplejodepotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return View('vistasDelegados.home');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\complejodepot  $complejodepot
     * @return \Illuminate\Http\Response
     */
    public function show(complejodepot $complejodepot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\complejodepot  $complejodepot
     * @return \Illuminate\Http\Response
     */
    public function edit(complejodepot $complejodepot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\complejodepot  $complejodepot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, complejodepot $complejodepot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\complejodepot  $complejodepot
     * @return \Illuminate\Http\Response
     */
    public function destroy(complejodepot $complejodepot)
    {
        //
    }
}

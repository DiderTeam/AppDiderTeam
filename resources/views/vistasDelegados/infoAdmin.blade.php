@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                
                <div class="card">
                    <div class="card-header">Sistema de reservas de canchas</div>
    
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        
                        <h1>Info de delegado</h1>
                        <h3>Mostrar Info del Delegado</h3>
                        
                        <tr>{{$infoDelegado->first()->nombre}}</tr>
                        <tr>{{$infoDelegado->first()->telefono}}</tr>
                        <tr>{{$infoDelegado->first()->rol}}</tr>
                        
                    </div>
                </div>
                
    
            </div>
        </div>
    </div>

@endsection
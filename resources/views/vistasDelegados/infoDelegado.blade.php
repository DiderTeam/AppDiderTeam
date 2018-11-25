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
                        
                        <h1>Perfil</h1>
                        <br>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item font-weight-bold">Nombre      : {{$delegadoActual->first()->nombre}}</li>
                            <li class="list-group-item font-weight-bold">Rut         : {{$delegadoActual->first()->rut}}</li>
                            <li class="list-group-item font-weight-bold">Telefono    : {{$delegadoActual->first()->telefono}}</li>
                            <li class="list-group-item font-weight-bold">Rol         : {{$delegadoActual->first()->rol}}</li>
                        </ul>
                       
                    </div>
                </div>
                
            </div>
        </div>
    </div>

@endsection
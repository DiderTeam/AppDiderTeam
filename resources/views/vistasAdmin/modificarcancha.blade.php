@extends('layouts.adminLayout')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8 mx-auto">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                @endif
                <div class="card">

                    <div class="card-header">Editar Cancha          {{ $canchas->nombre }}</div>
<br>
                    <div class="card-body">
                        <form class="form-group" method="POST" action="{{ route("vistaAdmin.editarcanchabd","id=$canchas->id") }}">
                            @csrf

                            <div class="form-group row">
                                <label for="nombre" class="col-md-3 col-form-label  text-md-right">Nombre:</label>

                                <div class="col-md-9">
                                    <input required type="text" name="nombre" class="form-control" value="{{ $canchas->nombre }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="disponible" class="col-md-3 col-form-label  text-md-right">disponible</label>

                                <div class="col-md-9">
                                    <input required type="int" name="disponible" class="form-control" value="{{ $canchas->disponible }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="idComplejoDeportivo" class="col-md-3 col-form-label  text-md-right">idComplejoDeportivo</label>

                                <div class="col-md-9">
                                    <input required type="int" name="idComplejoDeportivo" class="form-control" value="{{ $canchas->idComplejoDeportivo }}">
                                </div>
                            </div>
                       
                            <div class="form-group row">
                                <div class="col-md-9 ml-auto">
                                    <button  type="submit" class="btn btn-default">
                                        Editar
                                    </button>
                                    </button>
                                    <a  href="{{ route('listacanchas')}}"class="btn btn-info">Regresar al listado de Canchas </a>
                                    <br>
                                    <br>
                                    <a href="{{ route('listahorarios',"id=$canchas->id") }}" <button type="button" class="btn btn-danger">Ver horarios</button></a> 
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

               
            </div>

        </div>
    </div>
    <style>
                    a {
                        text-decoration: none;
                        display: inline-block;
                        padding: 8px 16px;
                    }

                    a:hover {
                        background-color: #ddd;
                        color: black;
                    }

                    .previous {
                        background-color: #f1f1f1;
                        color: black;
                    }

                    .next {
                        background-color: #4CAF50;
                        color: white;
                    }

                    .round {
                        border-radius: 50%;
                    }
                </style>


@endsection

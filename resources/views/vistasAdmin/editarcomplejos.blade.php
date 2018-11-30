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

                    <div class="card-header">Editar Complejos  {{ $complejos->nombre }}</div>
<br>
                    <div class="card-body">
                        <form class="form-group" method="POST" action="{{ route("vistaAdministrador.actualizarcomplejo","id=$complejos->id") }}">
                            @csrf

                            <div class="form-group row">
                                <label for="nombre" class="col-md-3 col-form-label  text-md-right">Nombre:</label>

                                <div class="col-md-9">
                                    <input required type="text" name="nombre" class="form-control" value="{{ $complejos->nombre }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="direccion" class="col-md-3 col-form-label  text-md-right">Direccion</label>

                                <div class="col-md-9">
                                    <input required type="text" name="direccion" class="form-control" value="{{ $complejos->direccion }}">
                                </div>
                            </div>
                            </div>
                       
                            <div class="form-group row">
                                <div class="col-md-9 ml-auto">
                                    <button  type="submit" class="btn btn-primary">
                                        Editar
                                    </button>
                                    </button>
                                    <a  href="{{ route('gestioncomplejodeportivo')}}"class="btn btn-success">Regresar al listado de los complejos</a>
                                    
                                    <br>
                                    <br>
                                    <br>
                                    <a  href="{{ route('listacanchas',"id=$complejos->id")}}"class="btn btn-warning">Ir a la lista de canchas</a>
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
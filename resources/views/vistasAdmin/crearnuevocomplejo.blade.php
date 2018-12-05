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

                    <div class="card-header">Agregar Nuevo Complejo Deportivo</div>
                    <br>

                    <div class="card-body">
                        <form class="form-group" method="POST" action="{{ route('createcomplejo') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="nombre" class="col-md-3 col-form-label  text-md-right">Nombre</label>

                                <div class="col-md-9">
                                    <input required type="text" name="nombre" class="form-control"placeholder="Estadio Ruben Castro" >
                                </div>
                            </div>
                            

                            <div class="form-group row">
                                <label for="direccion" class="col-md-3 col-form-label  text-md-right">Direccion</label>

                                <div class="col-md-9">
                                    <input required type="text" name="direccion" class="form-control" placeholder="Nva san martin">
                                </div>
                            </div>

     <div class="form-group row">
                                <label for="coordenada" class="col-md-3 col-form-label  text-md-right">Coordenada</label>

                                <div class="col-md-9">
                                    <input required type="text" name="coordenada" class="form-control"placeholder="10:4:1" >
                                </div>
                            </div>
                            

                            
                            

<br>        <br><br><br>                            <button  class="btn btn-primary">
                                        Agregar
                                    </button>
                                    <a  href="{{ route('gestioncomplejodeportivo')}}"class="btn btn-warning">Regresar al listado de complejos deportivos </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

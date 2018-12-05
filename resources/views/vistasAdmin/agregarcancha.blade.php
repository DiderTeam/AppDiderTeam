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

                    <div class="card-header">Agregar cancha</div>
                    <br>

                    <div class="card-body">
                        <form class="form-group" method="POST" action="{{ route('agregarCancha') }}">
                            @csrf
                            
                            <div class="form-group row">
                                <label for="nombre" class="col-md-3 col-form-label  text-md-right">Nombre</label>

                                <div class="col-md-9">
                                    <input required type="text" name="nombre" class="form-control"placeholder="Juan Perez" >
                                </div>
                            </div>
                            

                            <div class="form-group row">
                                <label for="disponible" class="col-md-3 col-form-label  text-md-right">Disponibilidad</label>

                                <div class="col-md-9">
                                    <input required type="int" name="disponible" class="form-control" placeholder="0">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="idComplejoDeportivo" class="col-md-3 col-form-label  text-md-right">IdComplejoDeportivo</label>

                                <div class="col-md-9">
                                    <input required type="int" name="idComplejoDeportivo" class="form-control" placeholder="111">
                                </div>
                            </div>
                            
<br>        <br><br><br>                            <button  class="btn btn-primary">
                                        Agregar
                                    </button>
                                    <a  href="{{ route('listacanchas')}}"class="btn btn-link">Regresar al listado de Canchas </a>
                                </div>
                            </div>
                        </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
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

                    <div class="card-header">Agregar horarios</div>
                    <br>

                    <div class="card-body">
                        <form class="form-group" method="POST" action="{{ route('agregarhorario') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="horarioinicio" class="col-md-3 col-form-label  text-md-right">Horario de inicio</label>

                                <div class="col-md-9">
                                    <input required type="text" name="horarioinicio" class="form-control"placeholder="10:00" >
                                </div>
                            </div>
                            

                            <div class="form-group row">
                                <label for="horariofinal" class="col-md-3 col-form-label  text-md-right">Horario final</label>

                                <div class="col-md-9">
                                    <input required type="text" name="horariofinal" class="form-control" placeholder="12:00">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="reservado" class="col-md-3 col-form-label  text-md-right">Reservado:</label>

                                <div class="col-md-9">
                                    <input required type="text" name="reservado" class="form-control" placeholder="1">
                                </div>
                                </div>

                                 <div class="form-group row">
                                <label for="idCancha" class="col-md-3 col-form-label  text-md-right">Id cancha:</label>

                                <div class="col-md-9">
                                    <input required type="text" name="idCancha" class="form-control" placeholder="1">
                                </div>
                            </div>

                            
                            

<br>        <br><br><br>                            <button  class="btn btn-primary">
                                        Agregar
                                    </button>
                                    <a  href="{{ route('listahorarios')}}"class="btn btn-link">Regresar a los horarios de cancha </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.app')

@section('content')
{{--VER ESTA PLANTILLA TAMBIEN--}}
<div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8 mx-auto">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                @endif
                <div class="card">

                    <div class="card-header">Editar Informacion Delegado {{ $users->name }}</div>
                    <br>
                    <div class="card-body">
                        <form class="form-group" method="POST" action="{{ route("vistasDelegado.editarInfo","id=$users->id") }}">
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-md-3 col-form-label  text-md-right">Nombre:</label>

                                <div class="col-md-9">
                                    <input required type="text" name="name" class="form-control" value="{{ $users->name }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-md-3 col-form-label  text-md-right">Correo</label>

                                <div class="col-md-9">
                                    <input required type="text" name="email" class="form-control" value="{{ $users->email }}">
                                </div>
                            </div>
                            {{--
                            <div class="form-group row">
                                <label for="password" class="col-md-3 col-form-label  text-md-right">Contraseña</label>

                                <div class="col-md-9">
                                    <input required type="text" name="password" class="form-control" value="{{ $users->password }}">
                                </div>
                            </div>
                            --}}
                            <div class="form-group row">
                                <div class="col-md-9 ml-auto">
                                    <button  type="submit" class="btn btn-primary">
                                        Editar
                                    </button>
                                    
                                    <a  href="{{ route('infoDelegado')}}"class="btn btn-link">Regresar a Perfil Delegado </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

               
            </div>

        </div>
    </div>


@endsection
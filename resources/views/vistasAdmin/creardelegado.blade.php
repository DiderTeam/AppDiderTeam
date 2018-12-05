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

                    <div class="card-header">Agregar Delegados</div>
<br>

                    <div class="card-body">
                        <form class="form-group" method="POST" action="{{ route('createdelegado') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-3 col-form-label  text-md-right">Nombre</label>

                                <div class="col-md-9">
                                    <input required type="text" name="name" class="form-control"placeholder="Juan Perez" >
                                </div>
                            </div>
                            

                            <div class="form-group row">
                                <label for="email" class="col-md-3 col-form-label  text-md-right">Correo</label>

                                <div class="col-md-9">
                                    <input required type="text" name="email" class="form-control" placeholder="ejemplo@example.com">
                                </div>
                            </div>

                            

                            <div class="form-group row">
                                <label for="password" class="col-md-3 col-form-label  text-md-right">Contraseña</label>
                                <div class="col-md-9">
                                    <input required id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Contraseña" required>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            

<br>        <br><br><br>                            <button  class="btn btn-primary">
                                        Agregar
                                    </button>
                                    <a  href="{{ route('listadelegado')}}"class="btn btn-link">Regresar al listado de delegados </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

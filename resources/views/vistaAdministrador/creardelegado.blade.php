@extends('layouts.adminLayout')
@section('content')

<h1> Crear usuario </h1>

{!!Form::open()!!}
<div class="form-group">
    {!!form::label('Nombre:')!!}
    {!!form::text('name',['class'=>'form-control','placeholder'=>' Ingresa el nombre del delegado'])!!}
    </div>

<div class="form-group">
    {!!form::label('Password:')!!}
    {!!form::text('password',null,['class'=>'form-control','placeholder'=>' Ingrese la contraseña del delegado'])!!}
    </div>
<div class="form-group">
{!!form::label('Correo:')!!}
{!!form::text('email',null,['class'=>'form-control','placeholder'=>' Ingresa el email del delegado'])!!}

{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
 {!!Form::close()}
    @endsection 

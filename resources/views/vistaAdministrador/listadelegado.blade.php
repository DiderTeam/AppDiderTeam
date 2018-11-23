@extends('layouts.adminLayout')
@section('content')

<h1> Lista de los delegados  </h1>

<br></br>

<table class='table' id="users">
    <thead>
        <thead>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Id</th>
        </thead)
        @foreach($admin as $lino)
        <tbody>
        <td>{{$lino->name}}</td>
        <td>{{$lino->email}}</td>
        <td>{{$lino->id}}</td>
        </tbody>
        @endforeach
        </table>

<script>
$(document).ready(function(){
    $('$users'.Datatable();)
});
</script>
@endsection
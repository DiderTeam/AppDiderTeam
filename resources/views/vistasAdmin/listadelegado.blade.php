@extends('layouts.adminLayout')
@section('content')


<div class="d-flex justify-content-between align-items-end">

<div class="container">
<h1 class="pb-1"> Lista de los delegados  </h1>

<p>
<a href="{{ route('creardelegado')}}" class="btn btn-success" >Crear un nuevo delegado</a>
</p>
</div>

          @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            @endif
 
<div class="container">
<table class="table" id="User">
                            <thead>
                                <tr>
                        
                                    <th scape="col"> #</th>
                                    <th scape="col">Nombre</th>
                                    <th scape="col">Email</th>
                                    <th scape="col">Acciones</th>
                                </tr>
                            </thead>
                            {{--  --}}
                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            <a href="{{ route('vistaAdministrador.editardelegado',"id=$user->id")}}" <button type="button" class="btn btn-primary">Editar</button></a>
                                            
                                            <a href="{{ route('delete.eliminardelegado',"$user->id") }}"" onclick="return confirm('¿Seguro que deseas eliminarlo?')" <button type="button" class="btn btn-danger">Eliminar</button></a> 
                                           


                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>    
                        </table>
</div>
       

</div>


@endsection
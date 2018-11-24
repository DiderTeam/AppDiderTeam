@extends('layouts.adminLayout')
@section('content')

<div class="d-flex justify-content-between align-items-end">

<p>
<a href="{{ route('creardelegado')}}" class="btn btn-primary">Crear un nuevo delegado</a>
</p>
<h1 class="pb-1"> Lista de los delegados  </h1>
</div>

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
                                            <a href="{{ route('editardelegado',"id=$user->id")}}"><span class="oi oi-pencil"></span></a>
                                            <a href="{{ route('eliminardelegado',"id=$user->id")}}"><span class="oi oi-delete"></span></a>


                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>    
                        </table>

@endsection
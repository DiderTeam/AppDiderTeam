@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card">
                    <div class="card-header">Mi perfil</div>
    
                    <div class="card-body">
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                @endif
                  
                        <div class="card-header">Su nombre :       {{ $users->name }}</div>
                        <br>
                        
                        <div class="card-header">Correo electronico :        {{ $users->email }}</div>
                        <br>
                        <div class="card-header">Id  :      {{ $users->id }}</div>
                        <br>
                        
                        <a href="{{ route('vistasDelegados.editardelegado',"id= $users->id")}} " class="btn btn-success" >Editar mi perfil</a>
                                   

                                     
                                        
                       
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>

@endsection
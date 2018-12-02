@extends('layouts.adminLayout')
@section('content')



<style type="text/css">
        
        h2,h1{
           
           

            text-align:center;
            margin: 0;
            font-size: 30px;
            margin-bottom: 20px;

        }
        th{
            
            text-align:center;
            margin: 0;
            font-size: 20px;
            margin-bottom: 20px;

        }
        label,button,tr{
            
            margin: 0;
            font-size:15px;
            margin-bottom: 20px;   
        }
        input,textarea{
            width:100%;
            margin-bottom: 20px;
            padding: 7px;
            box-sizing: border-box;
            font-size: 17px;
            border:none;
            font-family:Arial;

        }
        textarea{
            min-height: 100px;
            max-height: 200px;
            max-width: 100%;
        }
        #button{
            color: #ff7e00;
        }
        #boton{
            background: #31384A;
            color: #fff;
            padding: 20px;
        }
        #boton:hover{
            cursor: pointer;
        }
        @media(max-width: 480px){
            form{
                width: 100%;
            }

        }
        @media screen and (max-width: 600px) {
            table {
                width:100%;
            }
            thead {
                display: none;
            }
            tr:nth-of-type(2n) {
                background-color: inherit;
            }
            tr td:first-child {
                background: #f0f0f0;
                font-weight:bold;
                font-size:1.3em;
            }
            tbody td {
                display: block;
                text-align:rigth;
            }
            tbody td:before {
                content: attr(data-th);
                display: block;
                text-align:right;
            }
        }

    </style>
<div class="d-flex justify-content-between align-items-end">

<p>
<a href="{{ route('creardelegado')}}" class="btn btn-primary">Crear un nuevo delegado</a>
</p>
<h1 class="pb-1"> Lista de los delegados  </h1>
</div>

          @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            @endif
 

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
                                            <a href="{{ route('vistaAdministrador.editardelegado',"id=$user->id")}}"><span class="oi oi-pencil"></span></a>
                                            
                                            <a href="{{ route('delete.eliminardelegado',"$user->id") }}"" onclick="return confirm('¿Seguro que deseas eliminarlo?')"><span class="oi oi-delete"></span></a> 
                                           


                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>    
                        </table>

@endsection
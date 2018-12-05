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
                text-align:center;
            }
            tbody td:before {
                content: attr(data-th);
                display: block;
                text-align:center;
            }
        }

    </style>
<div class="d-flex justify-content-between align-items-end">

<div class="container">
<h1 class="pb-1"> Lista de Canchas  </h1>

<p>
<a href="{{ route('crearcancha',"id=$complejos->id")}}" class="btn btn-success" >Crear un nuevo cancha</a>
</p>
</div>

          @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            @endif
 


<div class="table-responsive">
  <table class="table" id="Cancha"> 
  
                            <thead>
                                <tr>
                        
                                    <th scape="col"> id</th>
                                    <th scape="col">Nombre</th>
                                    <th scape="col">disponibilidad</th>
                                    <th scape="col">idComplejo</th>
                                    <th scape="col">Acciones</th>
                                </tr>
                            </thead>
                            {{--  --}}
                            <tbody>
                                @foreach($canchas as $cancha)
                                    <tr>
                                        <td>{{ $cancha->id }}</td>
                                        <td>{{ $cancha->nombre }}</td>
                                        <td>{{ $cancha->disponible }}</td>
                                        <td>{{ $cancha->idComplejoDeportivo}}</td>
                                        <td>
                                            <a href="{{ route('vistasAdmin.modificarcancha',"id=$cancha->id")}}" <button type="button" class="btn btn-primary">Editar</button></a>
                                            <a href="{{ route('delete.eliminarcancha',"$cancha->id") }}"" onclick="return confirm('¿Seguro que deseas eliminar la cancha?')" <button type="button" class="btn btn-danger">Eliminar</button></a> 
                                           
            
                                        </td>

                                    </tr>
                                @endforeach
                                
                            </tbody>    
                        </table>
                        <p>
                        <a  href="{{ route('gestioncomplejodeportivo')}}"class="btn btn-warning">Regresar al listado de los complejos</a>
                    </p>
</div>
       

</div>


@endsection
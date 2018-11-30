<!DOCTYPE html>
<html lang="es">
<head style="background-color:#11BBB6">
  <title >Perfil administrador</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/fontello.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.css" >
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body style="background-color:#F7FBFA">

 
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" ,class="icon-user" href="{{ route('perfiladministrador')}}">Perfil del Administrador</a>
    </div>
    
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      <li class="active"><a href="{{ route('listadelegado')}}">Lista delegados</a></li>
      <li class="active"><a href="{{ route('gestioncomplejodeportivo')}}">Gestion de complejos deportivos</a></li>
      <li class="active"><a href="{{ route('agregarreglamento')}}">Gestión de información</a></li>
        </ul>

        
        </li>


       
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <button type="button" class="btn btn-default">Cerrar sesion</button></a> 
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}"  method="POST" style="display: none;">
                                        @csrf
                                    </form>
        
      </ul>
    </div>
  </div>
</nav>
@yield('content')

</body>
</html>
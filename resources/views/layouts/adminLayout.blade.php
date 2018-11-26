<!DOCTYPE html>
<html lang="es">
<head style="background-color:#11BBB6"/>
  <title >Perfil administrador</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/fontello.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.css" >
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body style="background-color:#CDD1D3">
    
 
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" ,class="icon-user" href="#">Perfil del Administrador</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ route('perfiladministrador')}}">Home</a></li>
        <li class="dropdown">
          <a class="icon-soccer" data-toggle="dropdown" href="#">Gestión de canchas <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('agregarcancha')}}">Agregar canchas</a></li>
            <li><a href="{{ route('modificarcancha')}}">Modificar canchas</a></li>
            <li><a href="{{ route('eliminarcancha')}}">Eliminar canchas</a></li>
          </ul>
        </li>
        <li class="active"><a href="{{ route('listadelegado')}}">Lista delegados</a></li>
        
        <li class="dropdown">
          <a class="icon-doc-text-inv" data-toggle="dropdown" href="#">Gestión de información <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('agregarreglamento')}}">Agregar reglamentos</a></li>
            <li><a href="{{ route('modificarreglamento')}}">Modificar reglamentos</a></li>
            
          </ul>
        </li>


       
      </ul>
      <ul class="nav navbar-nav navbar-right">
       
        <li><a href="{{ route('login')}}"><span class="glyphicon glyphicon-log-in"></span> Cerrar sesion</a></li>
      </ul>
    </div>
  </div>
</nav>
@yield('content')
</body>
</html>
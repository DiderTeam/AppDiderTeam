<style>
    .bg-color1, .bg-color1.box-contenido {
      background: #33335a; 
    }
    .navbar .navbar-brand{
        color: #FFF;
    }
    .navbar .navbar-brand:hover{
        color: #FFF;
    } 
    .navbar .navbar-nav a{
        color: #FFF !important;
    }
  </style>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-color1 sticky-top">
        <a class="navbar-brand active" href="{{ route('index') }}">AppDider</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="{{ route('calendario') }}">Agenda</a>
            <a class="nav-item nav-link" href="{{ route('ubicacion') }}">Ubicacion Canchas</a>
            <a class="nav-item nav-link" href="{{ route('login') }}">Solicitar reserva</a>
            <a class="nav-item nav-link" href="{{ route('reglamento') }}">Reglamento</a>
            <a class="nav-item nav-link" href="{{ route('contacto') }}">Contactos</a>
        </div>
        </div>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="https://twitter.com/copa_dider?lang=es"><i class="fab fa-twitter-square">&nbsp&nbsp</i></a>
            </li>
            <li class="nav-item">
                <a href="https://www.facebook.com/DeportesPUCV/"><i class="fab fa-facebook"></i>&nbsp&nbsp</a>
            </li>
            <li class="nav-item">
                <a href="https://www.youtube.com/user/pucvprensa"><i class="fab fa-youtube-square">&nbsp&nbsp</i></a>
            </li>

        </ul>
    </nav>
    

    @yield('contenido')
  </div>
  
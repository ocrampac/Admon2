<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Fuente de google Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i&display=swap" rel="stylesheet">
    <!-- iconos bootstrap -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" >
    <!--  CSS personalizado -->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/estilo.css') }}" >

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/radio.js') }}"></script>
    <!--  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">   -->
    <title> Facultad Administración</title>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-primary navbar-expand-md fixed-top">
      <div class="container ">
        <a href="{{url('articulo')}}" class="navbar-brand">
          <img src="{{ asset('images/escudo_buap.png')}}" alt="BUAP">
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse"
        data-target="#menu-principal">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu-principal">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"> <a href="" class="nav-link active">Inicio</a> </li>
            <li class="nav-item"> <a href="" class="nav-link ">Cerrar sesión</a> </li>
          </ul>
        </div>

      </div>
    </nav>

    <header class="pt-5 mt-5">
      @yield('header')


    </header>
    <section class="py-1 mt-1">
      @yield('section')

    </section>




    <footer class="pie text-center text-md-center bg-dark text-white fixed-bottom">


        <p class= "m-0 py-3"> </p>

    </footer>
    <!-- Optional JavaScript -->
  </body>
</html>

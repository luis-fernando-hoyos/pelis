 <!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- estilos -->
   	
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
     	<link rel="stylesheet" href="{{ url('css/font-awesome.min.css') }}">
      <link rel="stylesheet" href="{{ url('css/app.css') }}">
      <link rel="stylesheet" href="{{ url('css/styles.css')}}">
    <!-- fin de estilos -->

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <!-- fin de Scripts -->
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" style="color:white;" href="#">Peliculas</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#" style="color:white;" >Emision<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color:white;" href="#">Anime</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " style="color:white;" href="#">Estreno</a>
      </li>
       <li class="nav-item">
        <a class="nav-link " style="color:white;" href="#">Recomedados</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" style="color:white;" href="#">Series</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color:white;" href="#">Categorias</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color:white;" href="#">Destacados</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0 " >
      <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Buscar">
      <button class="btn btn-outline-success my-2 my-sm-0" style="color:white;" type="submit">Buscar</button>
    </form>
  </div>
</nav>
  	@yield('content')
     <script src="{{ asset('js/app.js') }}"></script>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>
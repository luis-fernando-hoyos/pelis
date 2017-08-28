 <!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- estilos -->
   	 	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
     	<link rel="stylesheet" href="{{ url('css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ url('css/app.css') }}">
        <link rel="stylesheet" href="{{ url('css/bootstrap-material-design.css') }}">
        <link rel="stylesheet" href="{{ url('css/ripples.css') }}">
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
<div class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="javascript:void(0)">Inicio</a>
    </div>
    <div class="navbar-collapse collapse navbar-responsive-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="javascript:void(0)">Emision</a></li>
        <li><a href="javascript:void(0)">Anime</a></li>
        <li><a href="javascript:void(0)">Categoria</a></li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control col-sm-8" placeholder="Buscar">
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="javascript:void(0)">Registro</a></li>
        <li><a href="javascript:void(0)">series</a></li>
        <li><a href="javascript:void(0)">GOT</a></li>
      </ul>
    </div>
  </div>
</div>

  	@yield('content')
    <script src="{{ url('js/jquery-3.1.1.min.js') }}"></script> 
	<script src="{{ url('js/app.js') }}"></script> 
    <script src="{{ url('js/ripples.js') }}"></script>
    <script src="{{ url('js/material.js') }}"></script>
    <script>
          $.material.init();
    </script>
     <script src="{{ asset('js/app.js') }}"></script>-->
</body>
</html>
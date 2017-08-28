<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <link rel="stylesheet" href="{{ url('css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ url('css/app.min.css') }}"> 
        <link rel="stylesheet" href="{{ url('css/bootstrap-material-design.css') }}">
        <link rel="stylesheet" href="{{ url('css/ripples.css') }}">
        <link rel="stylesheet" href="{{ url('css/styles.css')}}">


    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

<form class="form-horizontal">
  <fieldset>
    <legend>Legend</legend>
    <div class="form-group">
      <label for="inputEmail" class="col-md-2 control-label">Email</label>

      <div class="col-md-10">
        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-md-2 control-label">Password</label>

      <div class="col-md-10">
        <input type="password" class="form-control" id="inputPassword" placeholder="Password">

        <!--
        <div class="checkbox">
          <label>
            <input type="checkbox"> Checkbox
          </label>
          <label>
            <input type="checkbox" disabled> Disabled Checkbox
          </label>
        </div>
        <br>

        <div class="togglebutton">
          <label>
            <input type="checkbox" checked> Toggle button
          </label>
        </div>
        -->
      </div>
    </div>
    <div class="form-group" style="margin-top: 0;"> <!-- inline style is just to demo custom css to put checkbox below input above -->
      <div class="col-md-offset-2 col-md-10">
        <div class="checkbox">
          <label>
            <input type="checkbox"> Checkbox
          </label>
          <label>
            <input type="checkbox" disabled=""> Disabled Checkbox
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-offset-2 col-md-10">
        <div class="togglebutton">
          <label>
            <input type="checkbox" checked=""> Toggle button
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="inputFile" class="col-md-2 control-label">File</label>

      <div class="col-md-10">
        <input type="text" readonly="" class="form-control" placeholder="Browse...">
        <input type="file" id="inputFile" multiple="">
      </div>
    </div>
    <div class="form-group">
      <label for="textArea" class="col-md-2 control-label">Textarea</label>

      <div class="col-md-10">
        <textarea class="form-control" rows="3" id="textArea"></textarea>
        <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-2 control-label">Radios</label>

      <div class="col-md-10">
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
            Option one is this
          </label>
        </div>
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
            Option two can be something else
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="select111" class="col-md-2 control-label">Select</label>

      <div class="col-md-10">
        <select id="select111" class="form-control">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label for="select222" class="col-md-2 control-label">Select Multiple</label>

      <div class="col-md-10">
        <select id="select222" multiple="" class="form-control">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-10 col-md-offset-2">
        <button type="button" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>
    <!-- Scripts -->
     <script src="{{ url('js/app.js') }}"></script> 
    <script src="{{ url('js/ripples.js') }}"></script>
    <script src="{{ url('js/material.js') }}"></script>
    <script>
          $.material.init();
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

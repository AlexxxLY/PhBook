<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>PhoneBook</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                   font: 15px, sans-serif;
                }
        </style>

    </head>
    <body>

    <!-- <a class="navbar-brand" href="#">Logo</a> -->
    <!-- <div class="container"> -->
<!-- <div class = "text-center"> -->

<!-- </div>           -->
<!-- <div class="navbar"> -->
        <!-- <div class="navbar flex-center position-ref full-height"> -->
   
  <nav class="navbar navbar-inverse">
    <div class="container">
     <div class="navbar-header">
      <a class="navbar-brand" href="/">PhoneBook</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
            @if (Route::has('login'))
                    @auth
                    <li>
                       <a href="{{ url('/home') }}"><span class="glyphicon glyphicon-home"></span> Home</a>
                    </li>
                    @else
                    <li >
                        <a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                    </li>
                        @if (Route::has('register'))
                        <li>
                            <a href="{{ route('register') }}">
                            <span class="glyphicon glyphicon-user"></span> Register</a>
                        </li>
                        @endif
                    @endauth
                </ul>
            @endif
            </div>
        </nav>
<div id=but class="container">
<button class="btn btn-lg">Add</button>
<button class="btn btn-lg">Delete</button>

</div>
@yield('content')

    </body>
</html>

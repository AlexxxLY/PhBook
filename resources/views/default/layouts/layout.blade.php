<!DOCTYPE html>
<html lang="en">
<head>
  <title>Organizer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}

    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }

    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }

    .text-center {
      text-align: center;
    }
    th{
      text-align: center;
    }

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;}
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/"><span class="glyphicon glyphicon-phone"></span> Organizer</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <!-- <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul> -->
      <ul class="nav navbar-nav navbar-right">
       @if (Route::has('login'))
        @auth
        <!-- <li>
            <a href="{{ url('/home') }}"><span class="glyphicon glyphicon-home"></span> Home</a>
        </li> -->
        <li class="dropdown">
            <a id="navbarDropdown" class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            <span class="glyphicon glyphicon-user"></span> {{ Auth::user()->name }} <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="{{ route('logout') }}"onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">{{ __('Logout') }}
                </a></li>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
                </form>
             </ul>
        </li>
            @else
                <li >
                    <a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                </li>
                    @if (Route::has('register'))
                        <li>
                            <a href="{{ route('register') }}"><span class="glyphicon glyphicon-cog"></span> Register</a>
                        </li>
                    @endif
            @endauth
        @endif
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid text-center">
  <div class="row content">
    <div class="col-sm-2 sidenav">
    
      <!-- <a href="{{ route('index') }}">Phone List</a>
      <a href="{{ route('list') }}">Other</a> -->
      <p><a href="#">Link</a></p>
     
    </div>
    <div class="col-sm-8 text-left">


@section('content')
@guest
    <div class="text-center">
           <br>
           <h1 >Welcome!!!</h1>
           <p>To get started, you must log in ...</p>
        </div>
@endguest        
<br>
<div class="container">
<div class="nav-bar">
<a href="{{ route('list') }}"><button class="btn btn-lg btn-info">Add Contact</button></a>
<a href="{{ route('index') }}"><button class="btn btn-lg btn-info">Show All List</button></a>
</div>
<br>
<!-- <input class="form-control" id="myInput" type="text" placeholder="Search.."> -->
<form  method="get" class="form-horizontal" action="{{route('search')}}">
<div class="input-group col-xs-12 col-md-12" >
          <input type="text" name="search" class="form-control" placeholder="Search..." >
         <span class="input-group-btn">
           <button type="submit" class="btn btn-warning btn-md"><span class="glyphicon glyphicon-search"></span> Search</i>
           </button>
          </span>
            </div>
    </form>
  <br>
  <table class="table table-bordered table-striped text-center">  
    <thead>
      <tr>
        <th>Date</th>
        <th>Number</th>
        <th>Name</th>
        <th>Other</th>
        <th>Operations</th>
      </tr>
    </thead>
    @section('table-body')     
     @yield('table-body')
    @show
  </table>
</div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

@show
    </div>
    <!-- <div class="col-sm-2 sidenav"> -->
      <!-- <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div> -->
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>

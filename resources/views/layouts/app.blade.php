<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Quickstart - Basic</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
	    background-image:url("https://hdwallpaper20.com/wp-content/uploads/2017/08/High-Resolution-Beer-in-The-Glass-Computer-1080p-wallpaper-wp2006477.jpg");
        }

        .fa-btn {
            margin-right: 6px;
        }
	
	.titre{
		margin-bottom: 50px;
	}
        
        .menu{
				width:190px;
				padding: 5px;
				background-color: #c0c0c0;
				font-size: 15px;
				font-family: Arial;
				line-height: 1;
				position:relative;
				left: 100px;
	}
	.listeLegende{
		text-align: center;
		font-family: Arial;
		font-size: 20px;
	}
	.creation{
		position:relative;
		left: 100px;
		margin-top: 200px;
	}
    </style>
</head>
<body id="app-layout" >


<!-- barre de menu -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Menu</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Soirées <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Anniversaire Sarah</a></li>
            <li><a href="#">Post-DS</a></li>
          </ul>
        </li>
        <li><a href="#">Stocks</a></li>
        <li><a href="#">Profil</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>

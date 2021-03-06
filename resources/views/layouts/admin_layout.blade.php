<!DOCTYPE html>
<html>
<head>
	<title>Virtualización - Agregar usuarios</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
 	<link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/easy-autocomplete.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/easy-autocomplete.themes.min.css') }}">
	<link rel="stylesheet" type="text/css" media="screen" href="{{ URL::asset('css/responsive.css') }}"
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	
	
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

	<link rel="stylesheet" href="/resources/demos/style.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="{{ URL::asset('js/jquery.easy-autocomplete.min.js') }}"></script>	


	<title>Virtualización - @yield('title')</title>
</head>
<body>
	<header>
		<div id="menu-fijo" class="row">
			<div class="control-top">Hola, Administrador</div>
		</div>	
		<div class="menu-bar">
			<a href="#" class="bt-menu">
				<span class="glyphicon glyphicon-menu-hamburger"></span>Menu
			</a>
		</div>
		<nav>
			<ul>
				<li><a href="/admin"><span class="glyphicon  glyphicon-new-window"></span>
				Administrar Usuarios </a></li>
				<li><a href="/cargo"><span class="glyphicon  glyphicon-new-window"></span>
				Administrar Cargos </a></li>		
				<li><a href="/carrera"><span class="glyphicon  glyphicon-new-window"></span>
				Administrar Carreras </a></li>
				<li><a href="/curso"><span class="glyphicon  glyphicon-new-window"></span>
				Administrar Materias </a></li>

				<div class="control-top">			
					<li><a href="/logout"><span class="glyphicon glyphicon-off"></span> Cerrar Sesión</a></li>	
				</div>
			</ul>
		</nav>

	</header>
	<div id="manage_users">	
		<div class="row">
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
			</div>
				@yield('content')
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
			</div>
		</div>
	</div>

	<script type="text/javascript" src="{{ URL::asset('js/aliadas.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
</body>
</html>


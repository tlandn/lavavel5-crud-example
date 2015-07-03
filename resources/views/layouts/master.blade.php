<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>crud en laravel 5</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
</head>
<body>
	
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="{{ route('home') }}">Laravel 5</a>
			</div>
			<div class="nav navbar-nav navbar-right">
				<li><a href="{{ route('tasks.index') }}">Lista de Tareas</a></li>
			</div>
		</div>
	</nav>

	<main>
		<div class="container">

			@if(Session::has('flash_message'))
				<div class="alert alert-success">
					{{ Session::get('flash_message') }}
				</div>
			@endif
			
			@yield('content')
		</div>
	</main>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
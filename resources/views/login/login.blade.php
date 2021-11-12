<!DOCTYPE html>
<html>

<head>
	<title> Eduplan2 </title>

	<style>
    body {
      background-image: url('https://images.wallpaperscraft.com/image/single/girl_kitten_flower_141058_1600x1200.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
    }
	#login {
		padding: 10em;
		width: 60em;
	}
  </style>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" href="{{url('https://i.ibb.co/KwW980W/descarga-removebg-preview.png')}}">
	<link rel="stylesheet" href="{{ url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css')}}" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!--
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	-->

</head>

<body>

	<div class="container" id='login'>
	
						<!-- Para mensajes de alerta -->
			@if (session('warning'))
				<div class="alert alert-warning">
				{{ session('warning') }}
				</div>
			@endif
			
			<!-- Para mensajes de 'éxito -->
			@if (session('success'))
				<div class="alert alert-success">
				{{ session('success') }}
				</div>
			@endif
			<!-- Para validación de formularios -->
			@if ($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
		<form  action="{{ route('login.store') }}" method="POST">
			@csrf
			<div class="panel panel-primary">
				<div class="panel-heading text-center">
					<h2> Eduplan2 </h2>
				</div>
				<div class="panel-body">

					<h4>Usuario: </h4>
					<input type="text" class="form-control" name="usuario" placeholder="Nombre de usuario"><br>
					<h4>Contraseña: </h4>
					<input type="password" class="form-control" name="password" placeholder="Contraseña">
				</div>
				<div class="panel-footer">
					<button class="btn btn-primary">Ingresar</button>
				</div>
			</div>
		</form>
	</div>
	 <script src="{{url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js')}}" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>
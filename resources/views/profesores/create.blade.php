@extends('layout.layout')
@section('title','Nuevo Profesor')
@section('content')
	<h3>Nuevo Profesor<h3>
	
	<form action="{{ route('profesores.store') }}" method="POST" class="row g-3" enctype="multipart/form-data">
		@csrf
		<div class="col-md-6">
			<label for="nombre" class="form-label">Nombre</label>
			<input type="text" class="form-control" id="nombre" name="nombre">
		</div>
		<div class="col-md-6">
			<label for="Apellido Paterno" class="form-label">Apellido Paterno</label>
			<input type="number" class="form-control" id="Apellido Paterno" name="Apellido Paterno">
		</div>
		<div class="col-md-2">
			<label for="Apellido materno" class="form-label">Apellido materno</label>
			<input type="number" class="form-control" id="Apellido materno" name="Apellido materno">
		</div>
		<div class="col-md-2">
			<label for="RUT" class="form-label">RUT</label>
			<input type="number" class="form-control" id="RUT" name="RUT">
		</div>
		
		<div class="col-md-3">
			<label for="Correo" class="form-label">Correo</label>
			<input type="date" class="form-control" id="Correo" name="Correo">
		</div>
		<div class="col-md-2">
			<label for="Asignatura" class="form-label">Asignatura</label>
			<input type="number" class="form-control" id="Asignatura" name="Asignatura">
		</div>
		<div class="col-md-2">
			<label for="stock_minimo" class="form-label">Stock mínimo</label>
			<input type="number" class="form-control" id="stock_minimo" name="stock_minimo">
		</div>
		<div class="col-md-5">
			<label for="imagen" class="form-label">Imágen</label>
			<input class="form-control" type="file" id="imagen" name="imagen">
		</div>
		<div class="d-grid gap-2">
			<button type="submit" class="btn btn-primary">Registrar</button>
		</div>
	</form>
@endsection
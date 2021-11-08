@extends('layout.layout')
@section('title','Nuevo')
@section('content')
	<h3>Crear nuevo Profesor</h3>
	
	<form action="{{ route('profesores.store') }}" method="POST" class="row g-3" enctype="multipart/form-data">
		@csrf
		<div class="col-md-3">
			<label for="NOMBRE_PROF" class="form-label">Nombre Profesor</label>
			<input type="text" class="form-control" id="NOMBRE_PROF" name="NOMBRE_PROF">
		</div>
		<div class="col-md-3">
			<label for="APELLIDO1_PROF" class="form-label">Apellido paterno</label>
			<input type="text" class="form-control" id="APELLIDO1_PROF" name="APELLIDO1_PROF">
		</div>
		<div class="col-md-3">
			<label for="APELLIDO2_PROF" class="form-label">Apellido materno</label>
			<input type="text" class="form-control" id="APELLIDO2_PROF" name="APELLIDO2_PROF">
		</div>
		<div class="col-md-3">
			<label for="RUT_PROF" class="form-label">Rut Profesor</label>
			<input type="number" class="form-control" id="RUT_PROF" name="RUT_PROF">
		</div>
		<div class="d-grid gap-2">
			<button type="submit" class="btn btn-primary">Registrar</button>
	</form>
@endsection
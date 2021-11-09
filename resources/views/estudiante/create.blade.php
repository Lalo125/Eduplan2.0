@extends('layout.layout')
@section('title','Editar estudiante')
@section('content')
	
	<h3>Editar Estudiante</h3>
	
	<form action="{{ route('estudiantes.update',$estudiante -> ESTUDIANTES_ID) }}" method="POST" class="row g-3" enctype="multipart/form-data">
		@csrf
        @method('PUT')
		<select id="USUARIO_ID" class="form-select" name="USUARIO_ID">
			<option value="" selected>Seleccione...</option>
			@foreach($usuarios as $usuario)
				<option value="{{ $usuario->USUARIO_ID }}">{{ $usuario->USERNAME }}</option>
			@endforeach
		</select>
		<select id="CURSO_ID" class="form-select" name="CURSO_ID">
			<option value="" selected>Seleccione...</option>
			@foreach($cursos as $cursos)
				<option value="{{ $curso->CURSO_ID }}">{{ $curso->NOMBRE_CURSO }}</option>
			@endforeach
		</select>
		<div class="col-md-3">
			<label for="NOMBRE_EST" class="form-label">Nombre Estudiante</label>
			<input type="text" class="form-control" id="NOMBRE_EST" name="NOMBRE_EST" value="{{$estudiante->NOMBRE_EST}}">
		</div>
		<div class="col-md-3">
			<label for="APELLIDO1_EST" class="form-label">Apellido paterno</label>
			<input type="text" class="form-control" id="APELLIDO1_EST" name="APELLIDO1_EST"value="{{$estudiante->APELLIDO1_EST}}">
		</div>
		<div class="col-md-3">
			<label for="APELLIDO2_EST" class="form-label">Apellido materno</label>
			<input type="text" class="form-control" id="APELLIDO2_EST" name="APELLIDO2_EST"value="{{$estudiante->APELLIDO2_EST}}">
		</div>
		<div class="col-md-3">
			<label for="RUT_EST" class="form-label">Rut Estudiante</label>
			<input type="text" class="form-control" id="RUT_EST" name="RUT_EST"value="{{$estudiante->RUT_EST}}">
        </div>
		<div class="col-md-3">
			<label for="PROMEDIO" class="form-label">Promedio Estudiante</label>
			<input type="text" class="form-control" id="PROMEDIO" name="PROMEDIO"value="{{$estudiante->PROMEDIO}}">
		</div>
		<div class="d-grid gap-2">
			<button type="submit" class="btn btn-primary">Registrar</button>
	</form>
@endsection
@extends('layout.layout')
@section('title','Editar profesor')
@section('content')
	
	<h3>Editar Profesor</h3>
	
	<form action="{{ route('profesores.store',$profesor -> PROFESOR_ID) }}" method="POST" class="row g-3" enctype="multipart/form-data">
		@csrf
		<select id="USUARIO_ID" class="form-select" name="USUARIO_ID">
			<option value="" selected>Seleccione...</option>
			@foreach($usuarios as $usuario)
				<option value="{{ $usuario->USUARIO_ID }}">{{ $usuario->USERNAME }}</option>
			@endforeach
		</select>
		<select id="ASIGNATURA_ID" class="form-select" name="ASIGNATURA_ID">
			<option value="" selected>Seleccione...</option>
			@foreach($asignaturas as $asignatura)
				<option value="{{ $asignatura->ASIGNATURA_ID }}">{{ $asignatura->NOMBRE_ASIG }}</option>
			@endforeach
		</select>
		<div class="col-md-3">
			<label for="NOMBRE_PROF" class="form-label">Nombre Profesor</label>
			<input type="text" class="form-control" id="NOMBRE_PROF" name="NOMBRE_PROF" value="{{$profesor->NOMBRE_PROF}}">
		</div>
		<div class="col-md-3">
			<label for="APELLIDO1_PROF" class="form-label">Apellido paterno</label>
			<input type="text" class="form-control" id="APELLIDO1_PROF" name="APELLIDO1_PROF"value="{{$profesor->APELLIDO1_PROF}}">
		</div>
		<div class="col-md-3">
			<label for="APELLIDO2_PROF" class="form-label">Apellido materno</label>
			<input type="text" class="form-control" id="APELLIDO2_PROF" name="APELLIDO2_PROF"value="{{$profesor->APELLIDO2_PROF}}">
		</div>
		<div class="col-md-3">
			<label for="RUT_PROF" class="form-label">Rut Profesor</label>
			<input type="text" class="form-control" id="RUT_PROF" name="RUT_PROF"value="{{$profesor->RUT_PROF}}">
		</div>
		<div class="d-grid gap-2">
			<button type="submit" class="btn btn-primary">Registrar</button>
	</form>
@endsection
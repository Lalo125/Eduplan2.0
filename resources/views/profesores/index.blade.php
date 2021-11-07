@extends('layout.layout')
@section('title','Listado de profesores')
@section('content')
	
	<h2>Listado de Profesores</h2>
	
	<a class="btn btn-success" href="{{ url('/profesores/create') }}" role="button">Nuevo/a profesor</a>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">Nombre</th>
				<th scope="col">Apellido Paterno</th>
				<th scope="col">Apellido Materno</th>
				<th scope="col">RUT</th>
				<th scope="col">Correo</th>
				<th scope="col">Asignatura</th>
				<th scope="col">Acciones</th>
			</tr>
		</thead>
		<tbody>
	  </tbody>
	  @foreach ($profesores as $profesor)
    <tr>
      <th scope="row">{{$profesor-> PROFESOR_ID}}</th>
      <td>{{$profesor-> NOMBRE_PROF}}</td>
      <td>{{$profesor-> APELLIDO1_PROF}}</td>
      <td>{{$profesor-> APELLIDO2_PROF}}</td>
      <td>{{$profesor-> RUT_PROF}}</td>
      <td>{{$profesor-> CORREO_PROF}}</td>
	  <td>{{$profesor-> TIPO_PROF}}</td>
	  
      <td>
			<form action="{{ route('profesores.destroy', $profesor->PROFESOR_ID) }}" method="POST">
				<a href="{{ route('profesores.edit', $profesor->PROFESOR_ID) }}" class="btn btn-secondary">Editar</a>
				@csrf
				@method('DELETE')
				<button type="submit" class="btn btn-warning">Eliminar</button>
			</form>
		</td>
	  
	  
	  
    </tr>
    @endforeach
	</table>
	
@endsection

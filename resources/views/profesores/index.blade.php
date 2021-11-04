@extends('layout.layout')
@section('title','Listado de profesores')
@section('content')
	
	<h2>Listado de profesores</h2>
	
	<a class="btn btn-success" href="{{ url('/profesores/create') }}" role="button">Nueva profesor</a>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Nombre</th>
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
	  <td>{{$profesor-> CONTRASENA_PROF}}</td>
	  <td>{{$profesor-> TIPO_PROF}}</td>
      <td><button type="button" class="btn btn-success">Editar</button></td>
      <td><button type="button" class="btn btn-danger">Eliminar</button></td>
    </tr>
    @endforeach
	</table>
	
@endsection

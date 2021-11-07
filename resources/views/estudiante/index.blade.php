@extends('layout.layout')
@section('title','Listado de Estudiantes')
@section('content')
	
	<h2>Listado de Estudiantes</h2>
	
	<a class="btn btn-success" href="{{ url('/Estudiantes/create') }}" role="button">Nuevo/a estudiante</a>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">Nombre</th>
				<th scope="col">Apellido Paterno</th>
				<th scope="col">Apellido Materno</th>
				<th scope="col">Rut</th>
				<th scope="col">Correo</th>
				<th scope="col">Nota</th>
				<th scope="col">Promedio</th>
			</tr>
		</thead>
		</table>
		<tbody>
<<<<<<< HEAD
	
	  @foreach ($estudiantes as $estudiante)
    <tr>
      <th scope="row">{{$estudiante-> ESTUDIANTES_ID}}</th>
      <td>{{$estudiante-> CURSO_ID}}</td>
      <td>{{$estudiante-> NOMBRE_EST}}</td>
      <td>{{$estudiante-> APELLIDO1_EST}}</td>
      <td>{{$estudiante-> APELLIDO2_EST}}</td>
	  <td>{{$estudiante-> RUT_EST}}</td>
	  <td>{{$estudiante-> CORREO_EST}}</td>
      <td>{{$estudiante-> CONTRASENA_EST}}</td>
      <td>{{$estudiante-> TIPO_EST}}</td>
      <td><button type="button" class="btn btn-success">Editar</button></td>
      <td><button type="button" class="btn btn-danger">Eliminar</button></td>
    </tr>	
=======
	  </tbody>
	@foreach ($estudiantes as $estudiante)
		<tr>
			<th scope="row">{{$profesor-> PROFESOR_ID}}</th>
			<td>{{$estudiante-> ESTUDIANTE_ID	}}</td>
			<td>{{$estudiante-> CURSO_ID}}</td>
			<td>{{$estudiante-> NOMBRE_EST}}</td>
		    <td>{{$estudiante-> APELLIDO1_EST}}</td>
			<td>{{$estudiante-> APELLIDO2_EST}}</td>
			<td>{{$estudiante-> RUT_EST}}</td>
			<td>{{$estudiante-> CORREO_EST}}</td>
		    <td>{{$estudiante-> CONTRASENA_EST}}</td>
			<td>{{$estudiante-> TIPO_EST}}</td>
			<td><button type="button" class="btn btn-success">Editar</button></td>
			<td><button type="button" class="btn btn-danger">Eliminar</button></td>
		</tr>
>>>>>>> 807ba7348dd8c3ad746dbbd83286d0fab93c5ece
    @endforeach
	
    </tbody>	
	
@endsection
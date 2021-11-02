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
	</table>
	
@endsection
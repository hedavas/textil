@extends('layout')

@section('contenido')

<br>
    <h1>Codigo # {{ $qu->id }}</h1>
  
  <a href="{{ url("/Qu/") }}">Regresar a detalle Codigos de Calidad</a>
    <table  class="table table-striped">
    	<thead class="table-info">
    		<tr>
    			<th>ID</th>
    			<th>CODIGO</th>
    			<th>DESCRIPCION</th>
    		</tr>
    	</thead>

    	<tbody class="table-light">
    		<th>{{ $qu->id }}</th>
    		<th>{{ $qu->codigo }}</th>
    		<th>{{ $qu->description }}</th>
    	</tbody>

    </table>
@endsection





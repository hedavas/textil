@extends('layout')

@section('contenido')

<br>
    <h1>ID # {{ $sucursal->id }}</h1>
  
  <a href="{{ url("/sucursal/") }}">Regresar a detalle de Sucursal</a>
    <table  class="table table-striped">
    	<thead class="table-info">
    		<tr>
    			<th>ID</th>
    			<th>NOMBRE</th>
    			<th>DIRECCION</th>
    		</tr>
    	</thead>

    	<tbody class="table-light">
    		<th>{{ $sucursal->id }}</th>
    		<th>{{ $sucursal->nombre }}</th>
    		<th>{{ $sucursal->direccion }}</th>
    	</tbody>

    </table>
@endsection





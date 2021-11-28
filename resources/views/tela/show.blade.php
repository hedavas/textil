@extends('layout')

@section('contenido')

<br>
    <h1>Codigo # {{ $tela->id }}</h1>
  
  <a href="{{ url("/tela/") }}">Regresar a detalle de Inventario</a>
    <table  class="table      table-striped">
    	<thead  class="table-info">
    		<tr>
    			<th>ID</th>
    			<th>ITEM</th>
                <th>CANTIDAD</th>
    			<th>DESCRIPCION</th>
                <th>ANCHO</th>
                <th>UOM</th>
                <th>SUCURSAL</th>
                <th>CALIDAD</th>
                <th>COSTO_UNITARIO $</th>
                <th>STATUS</th>
    		</tr>
    	</thead>

    	<tbody class="table-light">
    		<th>{{ $tela->id }}</th>
    		<th>{{ $tela->item }}</th>
            <th>{{ $tela->cantidad }}</th>
    		<th>{{ $tela->descripcion }}</th>
            <th>{{ $tela->ancho->ancho }}</th>
            <th>{{ $tela->umedida->medida }}</th>
            <th>{{ $tela->sucursal->nombre }}</th>
            <th>{{ $tela->calidad->codigo }}</th>
            <th>{{ $tela->costo_unitario }}</th>
            <th>{{ $tela->status }}</th>
    	</tbody>

    </table>
@endsection





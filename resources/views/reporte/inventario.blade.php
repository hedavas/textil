@extends('layout')
@section('title', "Reporte de inventario")
@section('contenido')
   
 
    <div class="d-flex justify-content-between">
        <h1>  {{ __('Reportes') }} </h1>
        <p>
        <a href="{{ url('/reporte/graficaInv') }}" class="btn btn-outline-success" >Grafica de Telas </a>
        <a href="{{ url('/reporte/costosInv') }}" class="btn btn-outline-primary" >Grafica de Costos </a>
        
        
    </p>
    </div>



    @if ($telas->isNotEmpty())
    <table class="table table-striped table-bordered" id="example">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Item</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Ancho</th>
            <th scope="col">UOM</th>
            <th scope="col">Sucursal</th>
            <th scope="col">Status de Calidad</th>
            <th scope="col">Costo Unitario</th>
            
          </tr>
        </thead>
        <tbody>
           
            @foreach ($telas as $tela)
            <tr>
                <th> {{ $index ++ }} </th>
                <th> {{ $tela->item }} </th>
                <th> {{ $tela->cantidad }} </th>
                <td> {{ $tela->descripcion }}</td>
                <td> {{ $tela->ancho}} </td>
                <td> {{ $tela->medida}} </td>
                <td> {{ $tela->nombre}} </td>
                <td> {{ $tela->codigo}} </td>
                <td> {{ $tela->costo_unitario}} </td>
                             

        </tr>
        @endforeach
        </tbody>
      </table>



     @else
     <div class="alert alert-danger" role="alert"> No hay Registros
      </div>
     @endif

@endsection

@extends('layout')
@section('title', "Inventario de Telas")
@section('contenido')
   
 
    <div class="d-flex justify-content-between">
        <h1>  {{ $title }} </h1>
    <p>
        
    </p>
    </div>


    @if ($tela->isNotEmpty())
    <table class="table table-striped table-bordered" id="example2">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Item</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Sucursal</th>
            <th scope="col">Codigo de Calidad</th>
            <th scope="col">Status</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
           
            @foreach ($tela as $tela)
            <tr>
                <th> {{ $tela->id }} </th>
                <th> {{ $tela->item }} </th>
                <th> {{ $tela->cantidad }} </th>
                <th>  {{ $tela->descripcion }}</th>
                <th> {{ $tela->sucursal->nombre}} </th>
                <th> {{ $tela->calidad->codigo}} </th>
                <th> {{ $tela->status}} </th>
 
                             
            <td>

            <form method="POST" action="{{ url("/transaction/{$tela->id}/darBaja") }}">

              {{ method_field('PUT') }}

              {!! csrf_field() !!}

            
              <a href="{{ url("/transaction/{$tela->id}") }}" class="btn btn-sm">
                  <span placeholder="Cambiar Calidad" class="oi oi-eye btn btn-info btn-sm"></span>
              </a>
              <a href="{{ url("/transaction/{$tela->id}/editarCalidad") }}" class="btn btn-sm">
                  <span placeholder="Cambiar Calidad" class="oi oi-wrench btn btn-success btn-sm"></span>
              </a>

              <a href="{{ url("/transaction/{$tela->id}/editarSucursal") }}" class="btn btn-sm">
                  <span class="oi oi-transfer btn btn-secondary btn-sm"></span>
              </a> 

               <button type="submit" class="btn btn-sm">
                <span class="oi oi-power-standby btn btn-danger btn-sm"></span>
            </button>
            </form>


            </td>

        </tr>
        @endforeach
        </tbody>
      </table>



     @else
     <div class="alert alert-danger" role="alert"> No hay Registros
      </div>
     @endif
   
@endsection

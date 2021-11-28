@extends('layout')
@section('title', "Inventario de Telas")
@section('contenido')
   
 
    <div class="d-flex justify-content-between">
        <h1>  {{ $title }} </h1>
    <p>
        <a href="{{ url('/tela/create') }}" class="btn btn-primary" >Nuevo Registro </a>
    </p>
    </div>


    @if ($tela->isNotEmpty())
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
            <th scope="col">Codigo de Calidad</th>
            <th scope="col">Costo Unitario</th>
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
                <th> {{ $tela->descripcion }}</td>
                <th> {{ $tela->ancho->ancho}} </th>
                <th> {{ $tela->umedida->medida}} </th>
                <th> {{ $tela->sucursal->nombre}} </th>
                <th> {{ $tela->calidad->codigo}} </th>
                <th> {{ $tela->costo_unitario}} </th>
                <th> {{ $tela->status}} </th>
                             
            <td>
            
            <form action="{{ url('tela', $tela) }}" method="POST">
                    {{ csrf_field() }}
                     {{ method_field('DELETE') }}

            <a href="{{ url("/tela/{$tela->id}") }}" class="btn btn-info btn-sm">
                <span class="oi oi-eye"></span>
            </a>

            <a href="{{ url("/tela/{$tela->id}/editar") }}" class="btn btn-warning btn-sm">
                <span class="oi oi-pencil"></span>
            </a>                    

            
            <button type="submit" class="btn btn-danger btn-sm">
                <span class="oi oi-trash"></span>
            </button>
            </form>

            <form method="POST" action="{{ url("/transaction/{$tela->id}/darAlta") }}">

              {{ method_field('PUT') }}

              {!! csrf_field() !!}
            <button type="submit" class="btn btn-success btn-sm">
                <span class="oi oi-power-standby"></span>
            </button>
            </form>

            <form method="POST" action="{{ url("/transaction/{$tela->id}/darBajaA") }}">

              {{ method_field('PUT') }}

              {!! csrf_field() !!}
            <button type="submit" class="btn btn-danger btn-sm">
                <span class="oi oi-power-standby"></span>
            </button>
            </form>
            

            </td>

        </tr>
        @endforeach
        </tbody>
      </table>

  {{-- 
      Pagina {{ $tela->currentPage() }}
      <div class="d-flex justify-content-end"
      {{ $tela->links() }}
      </div>

      Ultima Pagina {{ $tela->lastPage()  }}
 --}}


     @else
     <div class="alert alert-danger" role="alert"> No hay Registros
      </div>
     @endif
   
@endsection

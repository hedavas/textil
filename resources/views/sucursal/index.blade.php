@extends('layout')
@section("Informe Sucursales")
@section('contenido')
   
 
    <div class="d-flex justify-content-between">
        <h1>  {{ $title }} </h1>
    <p>
        <a href="{{ url('/sucursal/create') }}" class="btn btn-primary" >Nueva Sucursal </a>
    </p>
    </div>


    @if ($sucursal->isNotEmpty())
    <table class="table table-striped table-bordered" id="example">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Direccion</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
           
            @foreach ($sucursal as $sucursal)
            <tr>
                <th> {{ $sucursal->id }} </th>
                <td>  {{ $sucursal->nombre }}</td>
                <td> {{ $sucursal->direccion}} </td>
             
            <td>
            
                <form action="{{ url('sucursal', $sucursal) }}" method="POST">
                    {{ csrf_field() }}
                     {{ method_field('DELETE') }}

            <a href="{{ url("/sucursal/{$sucursal->id}") }}" class="btn btn-info btn-sm">
                <span class="oi oi-eye"></span>
            </a>

            <a href="{{ url("/sucursal/{$sucursal->id}/editar") }}" class="btn btn-warning btn-sm">
                <span class="oi oi-pencil"></span>
            </a>                    

            
            <button type="submit" class="btn btn-danger btn-sm">
                <span class="oi oi-trash"></span>
            </button>
            </form>
            </td>

        </tr>
        @endforeach
        </tbody>
      </table>

  {{-- 
      Pagina {{ $sucursal->currentPage() }}
      <div class="d-flex justify-content-end"
      {{ $sucursal->links() }}
      </div>

      Ultima Pagina {{ $sucursal->lastPage()  }}
 --}}


     @else
     <div class="alert alert-danger" role="alert"> No hay Sucursales Registrados
      </div>
     @endif
   
@endsection

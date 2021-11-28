@extends('layout')
@section("Informe Sucursales")
@section('contenido')
   
 


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
            
              <a href="{{ url("/reporte/{$sucursal->id}") }}" class="btn btn-link">
                <span class="oi oi-eye"></span>
            </a>

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

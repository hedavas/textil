@extends('layout')
@section("Informe de Codigos de Calidad")
@section('contenido')
   
 
    <div class="d-flex justify-content-between">
        <h1>  {{ $title }} </h1>
    <p>
        <a href="{{ url('/Qu/create') }}" class="btn btn-primary" >Nuevo Codigo </a>
    </p>
    </div>


    @if ($qu->isNotEmpty())
    <table class="table table-striped table-bordered" id="example">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Codigo</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
           
            @foreach ($qu as $calidad)
            <tr>
                <th> {{ $calidad->id }} </th>
                <td>  {{ $calidad->codigo }}</td>
                <td> {{ $calidad->description}} </td>
             
            <td>
            
                <form action="{{ url('Qu', $calidad) }}" method="POST">
                    {{ csrf_field() }}
                     {{ method_field('DELETE') }}

            <a href="{{ url("/Qu/{$calidad->id}") }}" class="btn btn-info btn-sm">
                <span class="oi oi-eye"></span>
            </a>

            <a href="{{ url("/Qu/{$calidad->id}/editar") }}" class="btn btn-warning btn-sm">
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
      Pagina {{ $qu->currentPage() }}
      <div class="d-flex justify-content-end"
      {{ $qu->links() }}
      </div>

      Ultima Pagina {{ $qu->lastPage()  }}
 --}}


     @else
     <div class="alert alert-danger" role="alert"> No hay Codigos Registrados
      </div>
     @endif
   
@endsection

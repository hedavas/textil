@extends('layout')
@section('title', "Informe de Usuarios")
@section('contenido')
   
 
    <div class="d-flex justify-content-between">
        <h1>  {{ $title }} </h1>
    <p>
        <a href="{{ url('/usuarios/create') }}" class="btn btn-primary" >Nuevo Usuario </a>
    </p>
    </div>


    @if ($users->isNotEmpty())
    <table class="table table-striped table-bordered" id="example">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
            <th scope="col">Roll</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
           
            @foreach ($users as $user)
            <tr>
                <th> {{ $user->id }} </th>
                <td>  {{ $user->name }}</td>
                <td> {{ $user->email}} </td>
                <td> {{ $user->roll->roll}} </td>
             
            <td>
            
                <form action="{{ url('usuarios', $user) }}" method="POST">
                    {{ csrf_field() }}
                     {{ method_field('DELETE') }}

            <a href="{{ url("/usuarios/{$user->id}") }}" class="btn btn-info btn-sm">
                <span class="oi oi-eye"></span>
            </a>

            <a href="{{ url("/usuarios/{$user->id}/editar") }}" class="btn btn-warning btn-sm">
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
      Pagina {{ $users->currentPage() }}
      <div class="d-flex justify-content-end"
      {{ $users->links() }}
      </div>

      Ultima Pagina {{ $users->lastPage()  }}
 --}}


     @else
     <div class="alert alert-danger" role="alert"> No hay usuarios Registrados
      </div>
     @endif
   
@endsection

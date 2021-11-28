@extends('layout')
@section('title', "Editar Usuario")
@section('contenido')
    <br>
    <h1>Editar usuario</h1>


    @if ($errors->any())
    <div class="alert alert-danger">
      <h6>Por favor corrige los errores de abajo: </h6>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif





<form method="POST"  action="{{ url("/Qu/{$calidad->id}") }}">
        {{ method_field('PUT') }}

        {!! csrf_field() !!}

  <div class="form-group">
    <label for="nombre">Codigo</label>
    <input type="text" name="txtCodigo" value="{{ old('codigo', $calidad->codigo) }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese Codigo">
    
  </div>

  <div class="form-group">
    <label for="email">Descripcion</label>
   <input type="text" name="txtDescripcion" value="{{ old('description', $calidad->description) }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese Codigo">
    
  </div>
  <button type="submit" class="btn btn-primary">Actualizar Codigo</button>
</form>



@endsection
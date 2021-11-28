@extends('layout')
@section('title', "Editar Sucursal")
@section('contenido')
    <br>
    <h1>Editar Sucursal</h1>


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





<form method="POST"  action="{{ url("/sucursal/{$sucursal->id}") }}">
        {{ method_field('PUT') }}

        {!! csrf_field() !!}

  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" name="txtNombre" value="{{ old('nombre', $sucursal->nombre) }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>

  <div class="form-group">
    <label for="nombre">Direccion</label>
   <input type="text" name="txtDireccion" value="{{ old('direccion', $sucursal->direccion) }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    
  </div>
  <button type="submit" class="btn btn-primary">Actualizar Informacion</button>
</form>



@endsection
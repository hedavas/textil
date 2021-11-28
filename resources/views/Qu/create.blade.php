@extends('layout')

@section('contenido')

<h1>Registrar Codigos de Calidad</h1>



<form action="{{route('Qu.store')}}" method="POST" >
  {{ csrf_field() }}

	<div class="form-group">
    <label for="nombre">Codigo</label>
    <input type="text" name="txtCodigo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese Codigo">
    
  </div>

  <div class="form-group">
    <label for="email">Descripcion</label>
    <textarea class="form-control" name="txtDescripcion"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>




@stop
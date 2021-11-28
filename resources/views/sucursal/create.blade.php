@extends('layout')

@section('contenido')

<h1>Registrar Sucursal</h1>



<form action="{{route('sucursal.store')}}" method="POST" >
  {{ csrf_field() }}

	<div class="form-group">
    <label for="nombre">Nombre:</label>
    <input type="text" name="txtNombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese Codigo">
    
  </div>

  <div class="form-group">
    <label for="email">Direccion</label>
    <textarea class="form-control" name="txtDireccion"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>




@stop
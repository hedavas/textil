@extends('layout')

@section('contenido')

<h1>Contactanos</h1>



<form method="POST" action="contacto">
	<div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese Nombre">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese email">
   
  </div>
  <div class="form-group">
    <label for="email">Mensaje</label>
    <textarea class="form-control" name="mensaje"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>




@stop
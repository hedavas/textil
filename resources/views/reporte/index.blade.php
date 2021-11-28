@extends('layout')
@section('title', "Reporte de inventario")
@section('contenido')
   
 

    <div class="jumbotron">
    <p><center><h1 class="display-4">Seleccione Reporte</h1></center> </p>
    <br>
    <p>
        <a class="nav-link active" aria-current="page" href="{{ url('/reporte/inventario') }}">
          <button type="button" class="btn btn-info btn-lg btn-block">TODO EL INVENTARIO</button>
        </a>
      
              <a class="nav-link active" aria-current="page" href="{{ url('/reporte/calidad') }} ">
          <button type="button" class="btn btn-info btn-lg btn-block">POR CALIDAD</button>
        </a>
      
              <a class="nav-link active" aria-current="page" href="{{('/Qu/')}} ">
          <button type="button" class="btn btn-info btn-lg btn-block">TELA DEFECTUOSA</button>
        </a>
      
      <a class="nav-link active" aria-current="page" href="{{ url('/reporte/sucursal') }} ">
          <button type="button" class="btn btn-info btn-lg btn-block">POR SUCURSAL</button>
        </a>

        <a class="nav-link active" aria-current="page" href="{{('/reporte/')}}  ">
          <button type="button" class="btn btn-info btn-lg btn-block">REPORTES</button>
        </a>
    </p>  
   </div>


       
@endsection

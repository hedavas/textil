@extends('layout')
@section('title', "Registrar Inventario")
@section('contenido')
    <br>
    <h1>Registrar Inventario</h1>


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

    <form method="POST" action="{{ url('/tela/store') }}">

        {!! csrf_field() !!}


            <input type="hidden" name="user"  value="{{auth()->user()->id }}">
            <div class="form-group">
            <label for="staticEmail" >Item: </label>
            <input type="text" name="item" class="form-control" id="item" placeholder="Ejemplo ABCD"
              value="{{ old('item') }}">

              @if ($errors->has('item'))
                    <p>{{ $errors->first('item') }}</p>
              @endif
            </div>
            <div class="form-group">
            <label for="staticEmail" >Cantidad: </label>
            <input type="number" name="cantidad" class="form-control" id="cantidad" placeholder="Ejemplo 123"
              value="{{ old('cantidad') }}">

              @if ($errors->has('cantidad'))
                    <p>{{ $errors->first('cantidad') }}</p>
              @endif
            </div>

             <div class="form-group">
              <label class="form-label">Seleccione UOM: </label>
              <select class="form-select" name="umedida" class="form-control">
                  @foreach ($umedida as $umedida)
                     <option value="{{ $umedida['id'] }}"> {{ $umedida['medida'] }}</option>
                  @endforeach
                </select>
             </div>

              <div class="form-group">
                <label for="email">Descripcion</label>
                <textarea class="form-control" name="descripcion"></textarea>
              </div>

              @if ($errors->has('descripcion'))
                    <p>{{ $errors->first('descripcion') }}</p>
              @endif

          <div class="form-group">
            
            <label class="form-label">Seleccione Ancho de Tela: </label>
            
            <select class="form-select" name="ancho" class="form-control">
              @foreach ($ancho as $ancho)
                 <option value="{{ $ancho['id'] }}"> {{ $ancho['ancho'] }}</option>
              @endforeach
            </select>
         </div>




          <div class="form-group">
          <label class="form-label">Seleccione Codigo de Calidad: </label>
          <select class="form-select" name="calidad" class="form-control">
              @foreach ($calidad as $calidad)
                 <option value="{{ $calidad['id'] }}"> {{ $calidad['codigo'] }} - {{ $calidad['description'] }}</option>
              @endforeach
            </select>
         </div>

           <div class="form-group">
            <label for="staticEmail" >Costo Unitario: $ </label>
            <input type="number" name="costo_unitario" class="form-control" id="costo_unitario" placeholder="Ejemplo 123"
              value="{{ old('costo_unitario') }}">

              @if ($errors->has('costo_unitario'))
                    <p>{{ $errors->first('costo_unitario') }}</p>
              @endif
            </div>

               <input type="hidden" name="status" class="form-control" id="status"
              value="1">      

          <div class="form-group">
          <label class="form-label">Seleccione Sucursal: </label>
          <select class="form-select" name="sucursal" class="form-control">
              @foreach ($sucursal as $sucursal)
                 <option value="{{ $sucursal['id'] }}"> {{ $sucursal['nombre'] }}</option>
              @endforeach
            </select>
         </div>

    <button type="submit" class="btn btn-primary"> Crear Registro </button>

    </form>

@endsection
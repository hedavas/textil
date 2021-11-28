@extends('layout')
@section('title', "Editar Item")
@section('contenido')
    <br>
    <h1>Editar Item</h1>


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


  <form method="POST" action="{{ url("/transaction/{$tela->id}/actualizarCalidad") }}">

        {{ method_field('PUT') }}

        {!! csrf_field() !!}



            <div class="form-group">
            <label for="staticEmail" >Item: </label>
            <input type="text" name="item" class="form-control" id="item" readonly
              value="{{ old('item', $tela->item) }}">

              @if ($errors->has('item'))
                    <p>{{ $errors->first('item') }}</p>
              @endif
            </div>
            <div class="form-group">
            <label for="staticEmail" >Cantidad: </label>
            <input  type="number" name="cantidad" class="form-control" value="{{ old('cantidad', $tela->cantidad) }}">

              @if ($errors->has('cantidad'))
                    <p>{{ $errors->first('cantidad') }}</p>
              @endif
            </div>



            <div class="form-group">
                <label for="email">Descripcion</label>
                <textarea readonly class="form-control" name="descripcion">{{ old('descripcion', $tela->descripcion) }}</textarea>
              </div>

              @if ($errors->has('descripcion'))
                    <p>{{ $errors->first('descripcion') }}</p>
              @endif

             

          <div class="form-group">
          <label class="form-label">Codigo de Calidad: </label>
          <div class="checkbox">
                  @foreach ($calidad as $id => $calidad)
                    <label>
                      <input 
                      type="radio" 
                      value="{{$id}}" 
                      {{ $tela->pluck('calidad_id')->contains($id) ? 'checked' : '' }}  
                      name="calidad">

                      {{$calidad}}
                    </label>
                  @endforeach
                </div>
         </div>


         <div class="form-group">
          <label class="form-label">Sucursal: </label>
            <input readonly type="text" name="sucursal" class="form-control" value="{{ old('sucursal', $tela->sucursal->nombre) }}  ">
          </div>

 


    <button type="submit" class="btn btn-primary"> Actualizar Datos </button>

    </form>







@endsection
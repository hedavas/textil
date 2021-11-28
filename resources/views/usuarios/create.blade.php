@extends('layout')
@section('title', "Crear usuario")
@section('contenido')
    <br>
    <h1>Crear usuario</h1>


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

    <form method="POST" action="{{ url('/usuarios/store') }}">

        {!! csrf_field() !!}

            <div class="form-group">
            <label for="staticEmail" >Nombre: </label>
            <input type="text" name="name" class="form-control-plaintext" id="name" placeholder="Ejemplo Carlos Perez"
              value="{{ old('name') }}">

              @if ($errors->has('name'))
                    <p>{{ $errors->first('name') }}</p>
              @endif
            </div>

            <div class="form-group">
            <label for="staticEmail">Email</label>
            <input type="text" name="email" class="form-control-plaintext" id="email" placeholder="email@example.com"
              value="{{ old('email') }}">

              @if ($errors->has('email'))
                    <p>{{ $errors->first('email') }}</p>
              @endif
            </div>
           <div class="form-group">
            <label for="inputPassword" >Password</label>
              <input type="password" name="password" class="form-control" id="Password" placeholder="Mayor a 6 Caracteres"
              value="{{ old('password') }}">

              @if ($errors->has('password'))
                    <p>{{ $errors->first('password') }}</p>
              @endif

           </div>

          <div class="form-group">
            
            <label class="form-label">Roll de Usarios: </label>
            
            <select class="form-select" name="roll_id">
              @foreach ($roll as $rolls)
                 <option value="{{ $rolls['id'] }}"> {{ $rolls['roll'], $rolls['roll'] }}</option>
              @endforeach
            </select>
        </div>



    <button type="submit" class="btn btn-primary"> Crear usuario </button>

    </form>

@endsection
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


  <form method="POST" action="{{ url("/usuarios/{$user->id}") }}">

        {{ method_field('PUT') }}

        {!! csrf_field() !!}


           <div class="form-group">
            <label for="staticEmail" >Nombre: </label>
              <input type="text" name="name" class="form-control" id="name" placeholder="Ejemplo Carlos Perez"
              value="{{ old('name', $user->name) }}">

              @if ($errors->has('name'))
                    <p>{{ $errors->first('name') }}</p>
              @endif
            </div>


            <div class="form-group">
            <label for="staticEmail">Email</label>
              <input type="text" name="email" class="form-control" id="email" placeholder="email@example.com"
              value="{{ old('email', $user->email) }}">

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
            <label for="staticEmail" >Roll: </label>
              <label type="text" name="roll_id" class="form-control-plaintext" id="roll_id">{{ old('roll_id', $user->roll->roll) }}</label>

              @if ($errors->has('roll_id'))
                    <p>{{ $errors->first('roll_id') }}</p>
              @endif
            </div>




    <button type="submit" class="btn btn-primary"> Actualizar Usuario </button>

    </form>







@endsection
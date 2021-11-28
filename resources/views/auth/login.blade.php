@extends('layout')

@section('contenido')

<h1>Login</h1>



<form method="POST" action="/login">
	{!! csrf_field() !!}
  <div class="form-group">
  <label for="staticEmail">Email</label>
   <input type="text" name="email" class="form-control" id="email" placeholder="email@example.com"
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




  <button type="submit" class="btn btn-primary">Submit</button>
</form>




@stop
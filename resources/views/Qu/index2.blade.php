@extends('layout')
@section('contenido')
    <h1> </h1>

    <hr>

    @if(!empty($qu))
	    <ul>
		    @foreach ($qu as $qu)
		        
		        <li>{{ $qu->codigo }}, {{ $qu->description }}
		        <a href="{{ url("/Qu/{$qu->id}") }}">Ver detalle</a>
		        </li>
		    @endforeach
	    </ul>

	 @else

	 	<p>No hay Codigos Registrados</p>
	 @endif

@endsection


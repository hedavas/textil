@extends('layout')
@section('title', "Usuario {$user->id}")
@section('contenido')
<br>
<br>
<h1> Usuario # {{$user->id}}</h1>


<a href="{{ url('/usuarios/') }}">Regresar al listado del usuario</a>

<table class="table table-striped">
        <thead  class="table-info">
        <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Roll_Id</th>
        </tr>
        </thead>
        <tbody class="table-light">
                <th>
                    {{ $user->id }}
                </th>
                 <th>
                    {{$user->name}}
                </th>
                 <th>
                   {{$user->email}}
                </th>
                <th>
                        {{$user->roll->roll}}
                </th>
        </tbody>
</table>


@endsection
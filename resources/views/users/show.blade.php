@extends ('layout')

@section('title', "Usuario $id")

@section('contenido')

<h2>Usuario # {{$id}}</h2>

<p>Mostrando detalles del usuario: {{$id}}</p>
@endsection
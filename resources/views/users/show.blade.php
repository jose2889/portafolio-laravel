@extends ('layout')

@section('title', "Usuario $user->id")

@section('contenido')

<h2>Usuario # {{$user->id}}</h2>

<table class="table table-responsive table-striped table-bordered table-hover">
  <thead class="thead-inverse">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre y Apellido</th>
      <th scope="col">Correo Electronico</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
    </tr>
  </tbody>
</table>
<a href="{{route('users')}}">Regresar a la lista de usuarios</a>
@endsection
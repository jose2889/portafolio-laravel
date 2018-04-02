@extends ('layout')

@section ('title','Lista de usuarios')

@section ('contenido')
    <!-- Contenido de la sección -->
    <h1>{{ $title }}</h1>
        <table class="table table-responsive table-striped table-bordered table-hover">
        <thead class="thead-inverse">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre y Apellido</th>
            <th scope="col">Correo Electronico</th>
            <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td><a href="{{route('users.show',['id'=>$user->id])}}">Ver Detalles...</a></td>
                </tr>
            @endforeach
        </tbody>
        </table>     
@endsection

@section ('slider')

    @parent
    <h2>estamos usando parent</h2>    
@endsection
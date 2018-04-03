@extends ('layout')

@section ('title','Lista de usuarios')

@section ('contenido')
    <!-- Contenido de la sección -->
    <div class="d-flex justify-content-between align-items-end mb-2">
        <h1 class="pb-1">{{ $title }}</h1> 
        <p>
            <a href="{{route('users.create') }}" class="btn btn-primary">Nuevo Usuario</a>
        </p>
    </div>
    @if ($users->isNotEmpty())
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
                <td>
                    
                    <form action="{{route('users.delete', $user) }}" method="POST">

                    {{ csrf_field() }}
                    
                    {{ method_field('DELETE') }}
                    <a href="{{route('users.show', $user) }}" class="btn btn-link"><span class="oi oi-eye"></span></a>
                    <a href="{{route('users.edit', $user) }}" class="btn btn-link"><span class="oi oi-pencil"></span></a>
                    <button type="submit" class="btn btn-link"><span class="oi oi-trash"></span></button>
                    </form>
                </td>
                </tr>
            @endforeach
        </tbody>
        </table> 
        @else
            <p>No hay usuarios registrados</p>
        @endif    
@endsection

@section ('slider')

    @parent
    <h2>estamos usando parent</h2>    
@endsection
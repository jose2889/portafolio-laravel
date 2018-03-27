@extends ('layout')

@section ('title','Lista de usuarios')

@section ('contenido')
    <!-- Contenido de la sección -->
    <h1>{{ $title }}</h1>
        <ul>
            @foreach ($users as $user)
                <li>{{$user}}</li>
            @endforeach    
        </ul>    
@endsection

@section ('slider')

    @parent
    <h2>estamos usando parent</h2>    
@endsection
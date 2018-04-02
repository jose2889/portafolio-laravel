@extends ('layout')

@section('title', "Pagina no encontrada")

@section('contenido')

<div class="d-flex p-3 flex-column align-items-center">
    <h1 class="mb-3">Oops!, ay caramba</h1>
    <img src="{{asset('images/404.jpg')}}" height="350px" width="550px"  alt="">
    <h6>Ha ocurrido un error y no se ha encontrado la pagina</h6>
    <a href="{{ route('users') }}" class="btn btn-warning mt-3">Regresar</a>
</div>

@endsection
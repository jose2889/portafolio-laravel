@extends ('layout')

@section('title', "Crear Usuario")

@section('contenido')
<div class="row justify-content-center mt-3 pt-3">
    <div class="col">
        <h1 class="display-4">Crear Nuevo Usuario</h1>
        <hr class="bg-info">
        <p class="pb-0 mb-0">Te invitamos a contactarnos, te responderemos a la brevedad</p>
        <p class="text-danger small pt-0 mt-0">*Todos los cambos son obligatorios</p>
        <!-- formulario -->
        <form method="POST" action="{{ url('/usuarios') }}">
           {{ csrf_field() }}
            <div class="row form-group">
                <label for="nombre" class="col-form-label col-md-4">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" required>
            </div>
            <div class="row form-group">
                <label for="correo" class="col-form-label col-md-4">Correo Electronico:</label>
                <input type="text" name="correo" id="correo" class="form-control" placeholder="Correo Electronico" required>
            </div>
            <div class="row form-group">
                <label for="clave" class="col-form-label col-md-4">Contraseña:</label>
                <input type="text" name="clave" id="clave" class="form-control" placeholder="Contraseña" required>
            </div>
            <div class="col-md-8">
                <button type="submit" class="btn btn-info">Crear Usuario</button>
                <a class="btn btn-danger" href="{{route('users')}}">Regresar</a>
            </div>
        </form>
            
    </div>
</div>

@endsection
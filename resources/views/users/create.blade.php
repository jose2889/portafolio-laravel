@extends ('layout')

@section('title', "Crear Usuario")

@section('contenido')
<div class="card">
  <div class="card-header">
        <h4 class="card-title">Crear Nuevo Usuario</h4>
        <p class="pb-0 mb-0">Te invitamos a contactarnos, te responderemos a la brevedad</p>
        <p class="text-danger small pt-0 mt-0">*Todos los cambos son obligatorios</p>
  </div>
 
@if ($errors->any())
<div class="alert alert-danger">
    <h6>Se encontraron los siguientes errores:</h6>
    @foreach ($errors->all() as $error)
        <ul>
            <li>{{$error}}</li>
        </ul>
    @endforeach    
</div>
@endif
  <div class="card-block">
        <form method="POST" action="{{ url('/usuarios') }}">
           {{ csrf_field() }}
            <div class="form-group">
                <label for="nombre" class="col-form-label col-md-4">Nombre:</label>
                <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" class="form-control" placeholder="Nombre">
            </div>
            <div class="form-group">
                <label for="correo" class="col-form-label col-md-4">Correo Electronico:</label>
                <input type="text" name="correo" id="correo" value="{{ old('correo') }}" class="form-control" placeholder="Correo Electronico">
            </div>
            <div class="form-group">
                <label for="clave" class="col-form-label col-md-4">Contraseña:</label>
                <input type="password" name="clave" id="clave" class="form-control" placeholder="Contraseña">
            </div>
            <div class="col p-3">
                <button type="submit" class="btn btn-info">Crear Usuario</button>
                <a class="btn btn-danger" href="{{route('users')}}">Regresar</a>
            </div>
        </form>
    
    
  </div>
</div>
<div class="row justify-content-center mt-3 pt-3">
    <div class="col">
      
        <!-- formulario -->
                
    </div>
</div>

@endsection
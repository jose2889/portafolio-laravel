<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="Practicas Curso de Bootstrap Gratis">
    <meta name="keywords" content="HTML,CSS,Bootstrap">
    <meta name="author" content="Jose Hernandez">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <!-- estilos css -->
    <style>
      .slider{
        background: url("{{asset('images/bg-3.png')}}");
        background-size: cover;
        background-position: center; 
        height: 400px;
      }
    </style>  
</head>
<body>
    <!-- menu -->
    <div class="container-fluid bg-dark fixed-top text-center">    
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark container">
            <a class="navbar-brand" href="#">
                <img src="{{asset('images/bootstrap-solid.svg')}}" width="30" height="30" class="d-inline-block align-top" alt="">
                        Bootstrap
            </a>  
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="{{route('users')}}">Usuarios</a>
                    <a class="nav-item nav-link" href="#">Pricing</a>
                    <a class="nav-item nav-link mr-lg-4" href="#">Disabled</a>
                    <div><a href="#" class="btn btn-danger">Contacto</a></div>
                </div>
            </div>
        </nav>
    </div>
    <!-- fin de menu -->
    <!-- inicio de slaide -->
    <div class="container-fluid slider d-flex align-items-center justify-content-center flex-column text-white">
        <h3>¿Que quieres hacer hoy?</h3>
        <h1 class="display-4">Recibe Noticas por correo</h1>
        <p class="lead">Las mejores noticias de tecnologia</p>
        <form class="form-inline">
            <div class="form-group mb-2">
                <input type="email" class="form-control" placeholder="Escribe tu e-mail">
            </div>
            <button type="submit" class="btn btn-danger ml-2 mb-2">Enviar</button>
        </form>
    </div>
    <!-- inicio del main -->
    <div class="container">
        <h1 class="display-5">Blog</h1>
        <p class="lead">Escrito por Jose Hernandez</p>
        <hr>
        <!-- iniciio de articulos -->
        <div class="row mt-3">
          <div class="col-8">
            @yield('contenido')   
          </div>
          <div class="col-12 col-md-4">
            @section('slider')
              <h2>barra laterial funciona</h2>
              <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Primary card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
                  <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Success card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
                  <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Danger card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
                  <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Warning card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
                  <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Info card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
            @show
          </div>
        </div> 
                <!-- fin de articulos -->
                <!-- inicio de paginacion -->
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Anterior</a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#">Siguiente</a>
                      </li>
                    </ul>
                  </nav>
                  <!-- fin de paginacion -->
            </div>
            <!-- inicio de aside -->
           
        </div>
    </div>
    <!-- fin del main -->
    <!-- inicio de footer -->
    <div class="container-fluid bg-dark text-center text-white">
        <P>Desarrollado por Jose Hernandez</P>
        <p>Practica de curso de Bootstrap by Bluuweb!</p>
    </div>
    <!-- fin de footer -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
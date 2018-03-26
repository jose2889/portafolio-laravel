<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog de Noticias</title>
    <meta name="description" content="Practicas Curso de Bootstrap Gratis">
    <meta name="keywords" content="HTML,CSS,Bootstrap">
    <meta name="author" content="Jose Hernandez">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- estilos css -->
    <style>
      .slider{
        background: url("images/bg-3.png");
        background-size: cover;
        background-position: center; 
        height: 400px;
      }
    </style>  
</head>
<body>
    <!-- menu -->
    @include('nuevo')
    <!-- fin de menu -->
    <!-- inicio de slaide -->
    <div class="container-fluid slider d-flex align-items-center justify-content-center flex-column text-white">
        <h3>¿Que quieres hacer hoy?</h3>
        @yield('c')
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
            <div class="col-12 col-md-3">
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
            </div>
            <!-- fin de aside -->
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
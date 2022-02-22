<?php  $ruta = "http://35.181.8.108/Proyecto-After-Effects/JC/JC/index.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>After Effects Films</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <LINK REL=StyleSheet HREF="css/estilo.css" TYPE="text/css" MEDIA=screen>
        <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.css" >
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

<!-- Navigaion-->
<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="<?php echo $ruta?>">Fresh Films Productions</a>
        <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li  class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Portfolio</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">About</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Contact</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="<?php echo $ruta."Vista/formulariozuri.php"?>">Registrase</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Navigation-->




    <!--<div class="row d-flex justify-content-center " >
        <video class="justify-content-center" style="width: 80%; height: 20%;"  src="img/video.mp4" autoplay muted loop></video>
    </div>-->
      
    
    <table class="table">
      <thead class="thead-dark">
          <tr>
              <th scope="col-2">#</th>
              <th scope="col-2">Nombre</th>
              <th scope="col-2">Apellido</th>
              <th scope="col-2">Usuario</th>
              <th scope="col-4">Foto</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <th scope="row">1</th>
              <td>Iñigo</td>
              <td>Zuriaga</td>
              <td>@tonto</td>
              <td><img src="img/inigo.png" alt="perfilInigo" class="col-2"></td>
          </tr>
          <tr>
              <th scope="row">2</th>
              <td>Pablo</td>
              <td>Horcajada</td>
              <td>@pinto</td>
              <td><img src="img/pablo.jpg" alt="perfilPablo" class="col-2"></td>
          </tr>
          <tr>
              <th scope="row">3</th>
              <td>Pablo</td>
              <td>Bejar</td>
              <td>@lux</td>
              <td><img src="img/pabloB.jpg" alt="perfilPabloB" class="col-2"></td>
          </tr>
          <tr>
              <th scope="row">3</th>
              <td>Sergio</td>
              <td>Díaz</td>
              <td>@karamba</td>
              <td><img src="img/sergio.jpg" alt="perfilSergio" class="col-2"></td>
          </tr>
      </tbody>
  </table>
<div class="container">
    <h2>Noticias <destacadas></destacadas></h2>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="img/grabacion.jpg" class="d-block" alt="grabacion" style="width:100%;">
          <div class="carousel-caption" style="background-color: black">
            <h3>Estudio de grabación</h3>
            <p>Aquí fue donde hicimos el rodaje</p>
          </div>
        </div>
        <div class="item">
          <img src="img/crash.jpg" alt="inigo" class="d-block" style="width:100%;">
          <div class="carousel-caption" style="background-color: black">
            <h3>Inigo Zuriaga</h3>
            <p>Entrevista al carismático empleado de Fresh Films Productions</p>
          </div>
        </div>
          <div class="item">
              <img src="img/programacion.jpg" alt="programacion" class="d-block" style="width:100%;">
              <div class="carousel-caption" style="background-color: black">
                  <h3>Página realizada con Boostrap</h3>
                  <p>Esta página ha sido desarrollada en boostrap</p>
              </div>
          </div>
      </div>
  
      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  
      
    
</body>

</html>
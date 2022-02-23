<?php
require('Vista/app/header.php');
?>
    <!--<div class="row d-flex justify-content-center " >
        <video class="justify-content-center" style="width: 80%; height: 20%;"  src="img/video.mp4" autoplay muted loop></video>
    </div>-->
    <div class="container">
   <div class="table-responsive">
    <table class="table">
      <thead class="thead-dark">
          <tr>
              <th class="th-lg">#</th>
              <th class="th-lg">Nombre</th>
              <th class="th-lg">Apellido</th>
              <th class="th-lg">Usuario</th>
              <th class="th-lg">Foto</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <th scope="row">1</th>
              <td>Iñigo</td>
              <td>Zuriaga</td>
              <td>@topoGiratorio</td>
              <td><img src="img/inigo.png" alt="perfilInigo" class="col-4"></td>
          </tr>
          <tr>
              <th scope="row">2</th>
              <td>Pablo</td>
              <td>Horcajada</td>
              <td>@pinto</td>
              <td><img src="img/pablo.jpg" alt="perfilPablo" class="col-4"></td>
          </tr>
          <tr>
              <th scope="row">3</th>
              <td>Pablo</td>
              <td>Bejar</td>
              <td>@lux</td>
              <td><img src="img/pabloB.jpg" alt="perfilPabloB" class="col-4"></td>
          </tr>
          <tr>
              <th scope="row">3</th>
              <td>Sergio</td>
              <td>Díaz</td>
              <td>@karamba</td>
              <td><img src="img/sergio.jpg" alt="perfilSergio" class="col-4"></td>
          </tr>
      </tbody>
  </table>
   </div>
    </div>
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
<br>
<?php
require('Vista/app/footer.php');
?>
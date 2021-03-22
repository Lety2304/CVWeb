<?php
  // Funciones principales
  include 'php/php-functions.php';
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Curriculum vitae de Rubén Vargas de la Torre">
  <meta name="author" content="Rubén Vargas de la Torre">
  <meta name="generator" content="Rubén 1.0.0">
  <title>Curriculum vitae</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/starter-template/">
  <!-- Bootstrap core CSS -->
  <link href="resources/bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- fontawesome -->
  <link rel="stylesheet" href="resources/font-awesome-4.7.0/css/font-awesome.min.css">
  <style>
    .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
    }

    @media (min-width: 768px) {
    .bd-placeholder-img-lg {
    font-size: 3.5rem;
    }
    }
    /* Custom styles for this template */
    body {
    padding-top: 5rem;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
          <ul class="dropdown-menu" aria-labelledby="dropdown01">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <main class="container border">
    <div class="py-5 px-3 border">
      <div class="row py-1">
        <div class="col-sm border">
          <img src="images/profile/photo-profile.png" class="rounded float-end" alt="Foto de perfil">
          <h3><i class="fa fa-user" aria-hidden="true"></i> Datos personales.</h3>
          <label class="p-2">Nombre: Rubén Vargas de la Torre.</label>
          <br>
          <label class="p-2">Edad: <?php FunctionCalcularAnios('1992-11-20'); ?> años.</label>
          <br>
          <label class="p-2">Correo: <a href="mailto:rvtisc92@gmail.com">rvtisc92@gmail.com</a></label>
          <br>
          <label class="p-2">Celular: <a href="https://api.whatsapp.com/send?phone=+524271212216" target="_blank">427-121-22-16</a></label>
          <br>
          <label class="p-2">Formación: Ingeniero en sistemas computacionales (titulado).</label>
          <br>
          <label class="p-2">Residencia: <a href="https://goo.gl/maps/sYxTgW67aQR1cwCm6" target="_blank">Santiago de Querétaro, Qro.</a></label>
        </div>
      </div>
      <div class="row py-1">
        <div class="col-sm border">
          <h3><i class="fa fa-graduation-cap" aria-hidden="true"></i> Formación Académica.</h3>
          <label class="p-2">Ingeniería en sistemas computacionales.</label>
          <br>
          <label class="p-2"><a href="https://goo.gl/maps/wG6Jjuq82LhGnmZc6" target="_blank">Instituto Tecnológico de San Juan del Rio.</a></label>
          <br>
          <label class="p-2">2010 – 2015 (<?php echo FunctionCalcularAnios('2015-11-11'); ?> años de egresado).</label>
        </div>
      </div>
      <div class="row py-1">
        <div class="col-sm border">
          <h3><i class="fa fa-book" aria-hidden="true"></i> Cursos.</h3>
          <label class="p-2">Seguridad de la información.</label>
          <br>
          <label class="p-2"><a href="https://goo.gl/maps/wG6Jjuq82LhGnmZc6" target="_blank">Universidad autónoma de Chihuahua.</a></label>
          <br>
          <label class="p-2">2020.</label>
        </div>
      </div>
      <div class="row py-1">
        <div class="col-sm border">
          <h3><i class="fa fa-star" aria-hidden="true"></i> Habilidades y competencias.</h3>
          <ul class="list-group">
            <li class="list-group-item">Trabajo en equipo.</li>
            <li class="list-group-item">Liderazgo.</li>
            <li class="list-group-item">Planeación y organización.</li>
            <li class="list-group-item">Orientación al cliente.</li>
            <li class="list-group-item">Compromiso responsable.</li>
            <li class="list-group-item">Trabajo bajo alta presión.</li>
            <li class="list-group-item">Autodidacta.</li>
            <li class="list-group-item">Alto sentido de ética con la información.</li>
            <li class="list-group-item">Apego a los procesos de la empresa.</li>
            <li class="list-group-item">Buena redacción y escritura.</li>
          </ul>
        </div>
      </div>
      <div class="row py-1">
        <div class="col-sm border">
          <h3><i class="fa fa-desktop" aria-hidden="true"></i> Experiencia laboral.</h3>
          <ul class="list-group">
            <li class="list-group-item">Coordinación de equipo de desarrollo.</li>
            <li class="list-group-item">Experiencia en programación web.</li>
            <li class="list-group-item">Conocimientos de la norma ISO-27001 y ISO-9000.</li>
            <li class="list-group-item">Manejo de ERP (Enterprise Resource Planning).</li>
            <li class="list-group-item">Controlador de versiones Git.</li>
            <li class="list-group-item">Seguridad de la información (Sqlinyection, Cross-site scripting y Contraseñas seguras).</li>
            <li class="list-group-item">Administración y mantenimiento de Bases de datos Mysql y SQL.</li>
            <li class="list-group-item">Encriptación de datos (AES-256, MD5, base64 y hash).</li>
            <li class="list-group-item">Documentación de código y proyectos.</li>
            <li class="list-group-item">Conocimientos básicos de LINUX.</li>
            <li class="list-group-item">Conocimientos con los siguientes lenguajes de programación y/o plugins:
              <div class="container">
                <div class="row">
                  <div class="col-xl-6"><canvas id="myChart"></canvas></div>
                  <div class="col-xl-6"><canvas id="myChart2"></canvas></div>
                  <div class="col-xl-6"><canvas id="myChart3"></canvas></div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </main>
  <!-- Bootstrap -->
  <script src="resources/bootstrap-5.0.0-beta2-dist/js/bootstrap.bundle.min.js"></script>
  <!-- Chartjs -->
  <script src="resources/Chart.js-2.9.4/dist/Chart.min.js"></script>
  <script src="js/js-chart-languages.js"></script>
</body>
</html>

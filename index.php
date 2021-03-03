<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <title>MODA SHOPPING</title>
</head>

<body>
  <header>

    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Registro</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Inicia Sesión</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Carro de compras</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contáctanos</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  </header>
  <main class="container">

    <h1 class="text-center mt-5">MODA SHOPPING</h1>
    <h2 class="mb-3">PORDUCTOS EN INVENTARIO</h2>


    <!-- formulario -->
    <form action="index.php" method="POST">
      <!-- <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Ingresa tu nombre</label>
        <input type="text" class="form-control" name="nombre" placeholder="PepitoPérez">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Ingresa tus apellidos</label>
        <input type="text" class="form-control" name="apellido" placeholder="PepitoPérez">
      </div> -->
      <button type="button" class="btn btn-outline-primary">Vesstido Rojo: $35000---></button>
      <button type="button" class="btn btn-outline-secondary">Vestido Verde: $27850---></button>
      <button type="button" class="btn btn-outline-success">vestido Amarillo: $34000---></button>
      <div class="col-md-12 text-center mt-4">
        <button type="submit" class="btn btn-lg btn-info" name="botonEnviar">Calcular resultados</button>
      </div>
    </form>


    <?php if (isset($_POST["botonEnviar"])) : ?>
      <?php


      //$vestidoRojo = $_POST["vestidoRojo"];
      //$vestidoVerde = $_POST["vestidoVerde"];
      //$vestidoAmarillo = $_POST["vestidoAmarillo"];

      //SOLO UN VESTIDO
      $vestidoRojo = 35000; //5
      $vestidoRojoR = $vestidoRojo - ($vestidoRojo * 0.05);
      $vestidoVerde = 27850; //2
      $vestidoVerdeR = $vestidoVerde - ($vestidoVerde * 0.02);
      $vestidoAmarillo = 34000; //6
      $vestidoAmarilloR = $vestidoAmarillo - ($vestidoAmarillo * 0.06);

      echo ($vestidoRojoR);
      echo ("<br>");
      echo ($vestidoVerdeR);
      echo ("<br>");
      echo ($vestidoAmarilloR);
      echo ("<br>");
      ?>

    <?php endif; ?>

    <div style="position: relative;">
      <button type="button" class="btn btn-outline-dark mt-4">Vesstido Verde y Amarillo: $35000---></button>
      <button type="button" class="btn btn-outline-dark mt-4">Vestido Rojo y Verde: $27850---></button>
      <button type="button" class="btn btn-outline-dark mt-4">vestido Rojo y Amarillo: $34000---></button>
    </div>
    


    <?php if (isset($_POST["botonEnviar"])) : ?>
      <?php


      //CON DOS VESTIDOS
      $vestidoRojo = 35000; 
      $vestidoVerde = 27850; 
      $vestidoAmarillo = 34000; 
      $vestidoRojoVerde = $vestidoRojo + $vestidoVerde;
      $vestidoRojoAmarillo = $vestidoRojo + $vestidoAmarillo;
      $vestidoVerdeAmarillo = $vestidoAmarillo + $vestidoVerde;

      $vestidoRojoVerdeR = $vestidoRojoVerde - ($vestidoRojoVerde * 0.1);
      $vestidoRojoAmarilloR = $vestidoRojoAmarillo - ($vestidoRojoAmarillo * 0.1);
      $vestidoVerdeAmarilloR = $vestidoVerdeAmarillo - ($vestidoVerdeAmarillo * 0.1);

      echo ($vestidoRojoVerdeR);
      echo ("<br>");
      echo ($vestidoRojoAmarilloR);
      echo ("<br>");
      echo ($vestidoVerdeAmarilloR);
      echo ("<br>");
      ?>

    <?php endif; ?>
  </main>


  <!-- Pregunta Nùmero 2 
Respuesta: c. json_encode($array)
-->

  <!-- Pregunta Nùmero 4
Respuesta: b. Servicio en la nube que nos permite almacenar nuestros proyectos o repositorios
 -->


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


</body>

</html>
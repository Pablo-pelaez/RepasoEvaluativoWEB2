<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODA SHOPPING</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body class="container">

    <header class="mb-5">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">SHOPPING WEB</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
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

    <main>
        <h1 class="text-center mb-4">CALCULA TU FECHA DE NACIMIENTO</h1>
        <form action="ejercicio3.php" method="POST">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Ingresa tu Fecha de Nacimiento</label>
                <input type="number" class="form-control" name="nacimiento" placeholder="2002">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Ingresa el año que te encuentras</label>
                <input type="number" class="form-control" name="fecha" placeholder="2035">
            </div>
            <div>
                <button class="btn btn-lg btn-info" type="submit" name="botonEnviar">Calcular</button>
            </div>

        </form>


        <?php if (isset($_POST["botonEnviar"])) : ?>

            <?php
            $nacimiento = $_POST["nacimiento"];
            $fecha = $_POST["fecha"];

            if($nacimiento <= $fecha)
            {
                $nacimientoR = $fecha - $nacimiento;

                echo ("Tu edad en el año " . $fecha . " es: " . $nacimientoR);
            }
            else
                echo("Datos ingresados inválidos");
            
            ?>

        <?php endif; ?>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histórico de ventas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <style>
        label {
            font-weight: bold;
            color: #344e41;
        }

        body {
            padding: 30px;
            background-color: #dad7cd;
        }
        h1 {
      color: #3a5a40;
    }
    </style>
</head>

<body>

    <div id="contenido" style="z-index: 1;">
        <h1 style="text-align: center;">Historial de ventas</h1>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: #52796f !important;" aria-label="Eighth navbar example">
            <div class="container">
                <a class="navbar-brand" href="https://www.losandes.com.ar/resizer/_WIvomWySGt6YqlPXxdxNqU1mjk=/1200x630/smart/cloudfront-us-east-1.images.arcpublishing.com/grupoclarin/FHMCQ326BJE2DM6NT4HJKDUPXI.jpg">Top G</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarsExample07">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="comprar1.php">Comprar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="historial.php">Historial de ventas</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <table class="table table-info table-striped" style="text-align: center;">
            <thead>
                <th>Fecha</th>
                <th>ID de la fruta</th>
                <th>nombre de la fruta</th>
                <th>Cantidad de fruta (kg)</th>
                <th>precio de la compra </th>
                <th>Devoluciones</th>
            </thead>


            <?php
            $conex = include "conexion.php";
            $sentencia = "SELECT * FROM historial";
            $resultado = mysqli_query($conexion, $sentencia);
            while ($filas = mysqli_fetch_assoc($resultado)) {
                echo "<tr>";
                echo "<td>";
                echo $filas['fecha'];
                echo "</td>";
                echo "<td>";
                echo $filas['ID_fruta'];
                echo "</td>";
                echo "<td>";
                echo $filas['nombreFruta'];
                echo "</td>";
                echo "<td>";
                echo $filas['cantidadFruta'];
                echo "</td>";
                echo "<td>";
                echo $filas['precioCompra'];
                echo "</td>";
                if ($filas['devuelto'] == 0) {

                    echo "<td><a href='devolver.php?nombre=" . $filas['nombreFruta'] . "'> <button type='button' class='btn btn-primary'>Devolver</button> </a> </td>";
                }
                echo "</tr>";
            }


            ?>
        </table>
    </div>

</body>

</html>
<?php
include 'conexion.php';

$consulta = ConsultarFruta($_GET['nombre']);

function ConsultarFruta($nombre)
{
  include 'conexion.php';
  $sentencia = "SELECT * FROM fruta WHERE nombre='" . $nombre . "' ";
  $resultado = mysqli_query($conexion, $sentencia) or die(mysqli_connect_errno());
  $filas = mysqli_fetch_assoc($resultado);
  return [
    $filas['nombre'],
    $filas['precioKg'],
    $filas['cantidad']
  ];
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vender Producto</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <style>
    #nombre,
    #precioKg,
    #stock {
      pointer-events: none;
      border: 0px;
      text-transform: uppercase;
      color: #344e41;
      background-color: #dad7cd;
    }

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

  <div id="contenido">

      <h1 style="text-align: center;">Vender producto</h1>
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
      <br>
      <div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
      <form action="vender2.php" method="GET" style="border-collapse: separate; border-spacing: 10px 5px;">
        <div class="form-group">
          <label class="control-label"> Nombre de la fruta: </label>
          <input class="form-control" type="text" id="nombre" name="nombre" value="<?php echo $consulta[0] ?>">
        </div>
        <br>
        <div class="form-group">
          <label class="control-label"> Precio por kg de la fruta: </label>
          <input class="form-control" type="text" id="precioKg" name="precioKg" value="<?php echo $consulta[1] ?>">
        </div>
        <br>
        <div class="form-group">
          <label class="control-label"> Stock fruta: </label>
          <input class="form-control" type="text" id="stock" name="stock" value="<?php echo $consulta[2] ?>">
        </div>
        <br>
        <div class="form-group">
          <label class="control-label"> Cantidad (en kg) de fruta: </label>
          <input class="form-control" type="number" id="cantidad" name="cantidad" value="" max="<?php echo $consulta[2] ?>" min="1"><br>
        </div>

        <br>
        <input type="submit" class="btn btn-success" value="Vender" onclick="comprobar()">
      </form>
    </div>

  </div>


</body>

</html>
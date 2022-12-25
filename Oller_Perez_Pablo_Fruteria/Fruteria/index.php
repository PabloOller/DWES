<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Frutería</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <style>
    * {
      text-align: center;
    }

    #titulo {
      font-weight: bold;
      font-size: 70px;
      border: 3px solid black;
      background-color: rgb(232, 255, 127);

    }

    body {
      padding: 30px;
      background-color: #dad7cd;
    }

    a {
      text-decoration: none;
    }

    ul {
      list-style: none;
      font-size: 30px;
      display: flex;
      flex-direction: row;
      justify-content: center;
      gap: 100px;
    }

    h1 {
      color: #3a5a40;
    }

    #main {
      display: flex;
      flex-direction: column;
      justify-content: center;
      background-color: rgb(127, 255, 133);
      padding: 40px;
      gap: 40px;
      border: 3px solid black;
    }
  </style>
</head>

<body>
  <div id="contenido" class="container-fluid" style="z-index: 1;">
    <a href="index.php"><h1 style="text-align: center;">Frutería de Pablo</h1></a>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: #52796f !important;" aria-label="Eighth navbar example">
      <div class="container">
        <a class="navbar-brand" href="https://www.losandes.com.ar/resizer/_WIvomWySGt6YqlPXxdxNqU1mjk=/1200x630/smart/cloudfront-us-east-1.images.arcpublishing.com/grupoclarin/FHMCQ326BJE2DM6NT4HJKDUPXI.jpg">Top G</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExample07">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="comprar1.php">Comprar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="historial.php">Historial de ventas</a>
            </li>
            <li class="nav-item dropdown">
              <form action="index.php" method="POST" style="display: flex; justify-content:center">
                <a class="nav-link dropdown-toggle" href="index.php" id="dropdown07" data-bs-toggle="dropdown" aria-expanded="false">Ordenar por</a>
                <select class="dropdown-menu" aria-labelledby="dropdown07" name='ordenar'>
                  <option class="dropdown-item" value="1">Nombre(A-Z)</option>
                  <option class="dropdown-item" value="2">Nombre(Z-A)</option>
                  <option class="dropdown-item" value="3">Mayor cantidad</option>
                  <option class="dropdown-item" value="4">Menor cantidad</option>
                  <option class="dropdown-item" value="5">Mayor precio</option>
                  <option class="dropdown-item" value="6">Menor precio</option>
                </select>
                <button type="submit" class="btn btn-dark" style="background-color: #52796f !important; border: 0px" id="boton">Ordenar</button>
              </form>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <table class="table table-success table-striped">
      <thead>
        <th>Nombre</th>
        <th>Precio/kg</th>
        <th>Cantidad (kg)</th>
        <th> Vender </th>
        <th> Modificar</th>
        <th> (Des)Catalogar</th>
      </thead>

      <?php
      $conex = include "conexion.php";
      $sentencia = "SELECT * FROM fruta";
      $filtroElegido = filter_input(INPUT_POST, 'ordenar', FILTER_SANITIZE_STRING);
      switch ($filtroElegido) {
        case 1:
          $sentencia = "SELECT * FROM fruta ORDER BY nombre, descatalogado";
          break;

        case 2:
          $sentencia = "SELECT * FROM fruta ORDER BY nombre DESC";
          break;

        case 3:
          $sentencia = "SELECT * FROM fruta ORDER BY cantidad DESC";
          break;

        case 4:
          $sentencia = "SELECT * FROM fruta ORDER BY cantidad";
          break;

        case 5:
          $sentencia = "SELECT * FROM fruta ORDER BY precioKg DESC";
          break;

        case 6:
          $sentencia = "SELECT * FROM fruta ORDER BY precioKg";
          break;
      }


      $resultado = mysqli_query($conexion, $sentencia);
      while ($filas = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
        echo "<td>";
        echo $filas['nombre'];
        echo "</td>";
        echo "<td>";
        echo $filas['precioKg'];
        echo "</td>";
        echo "<td>";
        echo $filas['cantidad'];
        echo "</td>";
        echo "<td>  <a href='modificar1.php?nombre=" . $filas['nombre'] . "'> <button type='button' class='btn btn-success'>Modificar</button> </a> </td>";
        echo "<td> <a href='vender1.php?nombre=" . $filas['nombre'] . "''><button type='button' class='btn btn-success'>Vender</button></a> </td>";
        if ($filas['descatalogado'] == 1) {
          echo "<td>  <a href='catalogar.php?nombre=" . $filas['nombre'] . "'> <button type='button' class='btn btn-danger'>Catalogar</button> </a> </td>";
        } else {
          echo "<td> <a href='descatalogar.php?nombre=" . $filas['nombre'] . "''><button type='button' class='btn btn-success'>Descatalogar</button></a> </td>";
        }
        echo "</tr>";
      }

      ?>
    </table>
  </div>


</body>

</html>
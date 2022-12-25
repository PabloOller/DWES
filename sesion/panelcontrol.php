<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Control</title>
</head>

<body>
    <h2>La sesión creada correctamente</h2>
    <p>
        <?php
        if (isset($_POST['nombre'])) {
            $_SESSION['nombre'] = $_POST['nombre'];
            echo "Bienvenido! Has iniciado sesión como: <b>" . $_SESSION['nombre'] . "</b>";
        } else {
            if (isset($_SESSION['nombre'])) {
                echo "Has iniciado sesion como" . $_SESSION['nombre'];
            } else {
                echo "Acceso Restringido";
            }
        }
        ?>
    </p>
    <br>
    <p><a href="login.php">Ir a la página inicio</a></p>
    <br>
    <p><a href="cerrarsesion.php">Cerrar sesion</a></p>
</body>

</html>
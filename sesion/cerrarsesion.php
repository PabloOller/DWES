<?php

// inicie o si existe muestra
session_start();
//destruye la sesion
session_destroy();

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cerrar Sesión</title>
</head>

<body>
    <h2>Has cerrado sesión correctamente</h2>
    <br>
    <p><a href="login.php">Ir al login</a></p>
</body>

</html>
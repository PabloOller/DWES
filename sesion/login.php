<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login.php</title>
</head>
<body>
    <?php
    if(isset($_SESSION['nombre'])){
        echo "<p>Has inicioado sesion como:".$_SESSION['nombre']."</p>";
        echo "<p><a href='cerrarsesion.php'>Cerrar Sesion</a></p>";
        echo "<p><a href='panelcontrol.php'>Ir al panel de control</a></p>";

    } else{

    ?>
    <form action="panelcontrol.php" method="post">
        <p>Nombre: </p>
        <p><input type="text" placeholder="Introduzca su nombre: " name="nombre" required></p>
        <p><input type="submit" name="crea" value="Crear Sesion"></p>
    </form>
    <?php
    }
    ?>
</body>
</html>

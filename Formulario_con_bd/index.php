<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css" type="text/css">
    <title>Registro de usuario</title>
</head>

<body>
    <form method="post">
        <h1>Usuario</h1>
        <input type="text" name="nombre" placeholder="Nombre completo">
        <input type="email" name="email" placeholder="Email">
        <input type="submit" name="registrar" value="registrar">

    </form>
    <?php
    include("registrar.php");
    ?>
</body>

</html>
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
        <h1>Alumno</h1>
        <input type="text" name="nombre" placeholder="Nombre completo">
        <input type="text" name="apellido" placeholder="Ambos apellidos">
        <input type="number" name="telefono" placeholder="123456789">
        <input type="submit" name="registrar" value="registrar">
        <input type="submit" id="cerrado" value="Cerrar" name="Cerrar">
    </form>
    <?php
    include("registrar.php");
    include("modificar.php");
    include("eliminar.php");
    ?>
    <table id="tabla" border="1">
        <tr>
            <td>Nombre</td>
            <td>Apellidos</td>
            <td>Teléfono</td>
        </tr>
        <?php
        if (!isset($_POST['Cerrar'])) {


            $sql = "SELECT * FROM alumno";
            $resultado = mysqli_query($conexion, $sql);
            while ($mostrar = mysqli_fetch_array($resultado)) {
        ?>
                <tr>
                    <td><?php echo $mostrar['ID'] ?></td>
                    <td><?php echo $mostrar['nombre'] ?></td>
                    <td><?php echo $mostrar['apellido'] ?></td>
                    <td><?php echo $mostrar['telefono'] ?></td>
                </tr>
        <?php
            }
        }
        ?>
    </table>
    <form method="post" action="modificar.php">
        <h1>Modificar</h1>
        <input type="text" name="nombre" placeholder="Nombre actual">
        <input type="text" name="apellido" placeholder="apellidos actuales">
        <input type="number" name="telefono" placeholder="Telefono actual">
        <input type="text" name="nombreNuevo" placeholder="Nombre nuevo">
        <input type="text" name="apellidoNuevo" placeholder="Apellidos nuevos">
        <input type="number" name="telefonoNuevo" placeholder="Teléfono nuevo">
        <input type="submit" id="modificar" value="Modificar" name="Modificar">
    </form>
    <form method="post" action="eliminar.php">
        <h1>Eliminar</h1>
        <input type="text" name="nombre" placeholder="Nombre completo">
        <input type="text" name="apellido" placeholder="Ambos apellidos">
        <input type="submit" id="eliminar" value="Eliminar" name="Eliminar">
    </form>
</body>

</html>
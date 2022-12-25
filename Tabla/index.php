<?php
$servidor='localhost:3307';
$usuario='root';
$contraseña ='';
$bd='colores';

$conexion=mysqli_connect($servidor,$usuario,$contraseña,$bd);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <tr>
            <td>Identificador</td>
            <td>Color</td>
            <td>Descripción</td>
        </tr>
        <?php
        $sql = "SELECT * FROM color";
        $resultado = mysqli_query($conexion, $sql);

        while ($mostrar = mysqli_fetch_array($resultado)) {
        ?>
            <tr>
                <td><?php echo $mostrar['ID'] ?></td>
                <td><?php echo $mostrar['color_ingles'] ?></td>
                <td><?php echo $mostrar['descripcion'] ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>
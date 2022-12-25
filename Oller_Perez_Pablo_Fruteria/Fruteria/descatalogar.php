<?php
include 'conexion.php';

$consulta = Descatalogar($_GET['nombre']);

function Descatalogar($nombre)
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
        $sentencia = "UPDATE fruta SET descatalogado = '1' WHERE nombre='" . $consulta[0] . "' ";
        mysqli_query($conexion, $sentencia) or die(mysqli_connect_errno());
?>
        <script type="text/javascript">
            alert("Descatalogado correctamente");
            window.location.href = 'index.php';
        </script>
    <?php

    ?>
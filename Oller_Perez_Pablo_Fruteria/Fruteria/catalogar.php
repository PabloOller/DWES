<?php
include 'conexion.php';

$consulta = Catalogar($_GET['nombre']);

function Catalogar($nombre)
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
    if (intval($consulta[2]) > 0) {
        $sentencia = "UPDATE fruta SET descatalogado = '0' WHERE nombre='" . $consulta[0] . "' ";
        mysqli_query($conexion, $sentencia) or die(mysqli_connect_errno());
?>
        <script type="text/javascript">
            alert("Catalogado correctamente");
            window.location.href = 'index.php';
        </script>
    <?php
    } else {
    ?>
        <script type="text/javascript">
            alert("No hay cantidad de ese producto");
            window.location.href = 'index.php';
        </script>
<?php
    }

?>
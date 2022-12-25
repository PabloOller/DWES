<?php
$conexion = include 'conexion.php';

NuevoProducto($_POST['Nombre'], $_POST['PrecioKg'], $_POST['Cantidad']);

function NuevoProducto($nom, $precio, $cant)
{
	include 'conexion.php';
	echo $sentencia = "INSERT INTO fruta (nombre, precioKg, cantidad, descatalogado) VALUES ('" . $nom . "', '" . $precio . "', '" . $cant . "','0')";
	if (mysqli_query($conexion, $sentencia)) {
	}
}
?>

<script type="text/javascript">
	alert("Se ha podido comprar la fruta");
	window.location.href = 'index.php';
</script>
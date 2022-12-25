<?php

$conexion = include 'conexion.php';

VenderFruta($_GET['nombre'], $_GET['precioKg'], $_GET['cantidad']);

function VenderFruta($nombre, $precio, $cantidad)
{
	include 'conexion.php';
	$fruta = "SELECT cantidad FROM fruta WHERE nombre='" . $nombre . "' ";
	$frutaa = mysqli_query($conexion, $fruta) or die(mysqli_connect_errno());
	$resultado = mysqli_fetch_assoc($frutaa);
	$resultado["cantidad"] = intval($resultado["cantidad"]);
	$cantidad = intval($cantidad);
	$precio = intval($precio);
?>
	<?php
	if ($resultado["cantidad"] >= $cantidad) {
		$stock = $resultado["cantidad"] - $cantidad;
		if ($stock > 0) {
			$sentencia = "UPDATE fruta SET cantidad= '" . $stock . "' WHERE nombre='" . $nombre . "' ";
		} else {
			$sentencia = "UPDATE fruta SET cantidad= '" . $stock . "', descatalogado = '1' WHERE nombre='" . $nombre . "' ";
		}
		mysqli_query($conexion, $sentencia) or die(mysqli_connect_errno());
		$fecha = date("y-m-d");
		include 'conexion.php';
		$id_fruta = "SELECT ID FROM fruta WHERE nombre='" . $nombre . "' ";
		$id_frutaa = mysqli_query($conexion, $id_fruta) or die(mysqli_connect_errno());
		$resultado = mysqli_fetch_assoc($id_frutaa);
		$ID = intval($resultado["ID"]);
		$coste = $cantidad * $precio;

		$sentencia = "INSERT INTO historial (fecha, ID_fruta, nombreFruta, cantidadFruta, precioCompra) VALUES ('" . $fecha . "', '" . $ID . "', '" . $nombre . "', '" . $cantidad . "', '" . $coste . "')";

		mysqli_query($conexion, $sentencia) or die(mysqli_connect_errno());
	?>
		<script type="text/javascript">
			alert("Se vendido correctamente");
			window.location.href = 'index.php';
		</script>
<?php
	}
}
?>
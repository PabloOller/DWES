<?php

	$conexion=include 'conexion.php';

	ModificarFruta($_POST['nombre'], $_POST['precioKg'], $_POST['cantidad']);

	function ModificarFruta($nombre, $precio, $cantidad)
	{
		include 'conexion.php';
		$sentencia="UPDATE fruta SET nombre='".$nombre."', preciokg= '".$precio."', cantidad= '".$cantidad."' WHERE nombre='".$nombre."' ";
		mysqli_query($conexion,$sentencia) or die (mysqli_connect_errno());
	}
?>

<script type="text/javascript">
	alert("Se ha actualizado el precio de manera correcta");
	window.location.href='index.php';
</script>
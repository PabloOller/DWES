<?php
include 'conexion.php';

$consulta = ConsultarFruta($_GET['nombre']);
$consulta2 = ConsultarDevolucion($_GET['nombre']);
function ConsultarFruta($nombre)
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
function ConsultarDevolucion($nombre)
{
  include 'conexion.php';
  $sentencia = "SELECT * FROM historial WHERE nombreFruta='" . $nombre . "' ";
  $resultado = mysqli_query($conexion, $sentencia) or die(mysqli_connect_errno());
  $filas = mysqli_fetch_assoc($resultado);
  return [
    $filas['fecha'],
    $filas['ID_fruta'],
    $filas['nombreFruta'],
    $filas['cantidadFruta'],
    $filas['precioCompra'],
    $filas['id_compra']
  ];
}
$consulta3 = devolverFrutas($consulta2[3], $consulta[2], $consulta[0], $consulta2[1], $consulta2[4], $consulta2[5]);
function devolverFrutas($cantidadFruta, $cantidad, $nombre, $ID, $coste, $id_compra)
{
  include 'conexion.php';
  $cantidad += $cantidadFruta;
  $cantidadFruta = intval($cantidadFruta) * -1;
  $fecha = date("y-m-d");
  $coste = intval($coste) * -1;
  $sentencia = "UPDATE fruta SET cantidad= '" . $cantidad . "' WHERE nombre='" . $nombre . "' ";
  mysqli_query($conexion, $sentencia) or die(mysqli_connect_errno());
  $sentencia = "UPDATE historial SET devuelto= '1' WHERE id_compra='" . $id_compra . "' ";
  mysqli_query($conexion, $sentencia) or die(mysqli_connect_errno());
  $sentencia = "INSERT INTO historial (fecha, ID_fruta, nombreFruta, cantidadFruta, precioCompra, devuelto) VALUES ('" . $fecha . "', '" . $ID . "', '" . $nombre . "', '" . $cantidadFruta . "', '" . $coste . "', '1')";
  mysqli_query($conexion, $sentencia) or die(mysqli_connect_errno());
}
?>
<script>
  alert('Compra devuelta correctamente');
  window.location.href = 'index.php';
</script>
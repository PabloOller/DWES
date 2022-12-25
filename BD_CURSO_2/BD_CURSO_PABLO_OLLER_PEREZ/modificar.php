<?php

include("con_db.php");
if ($conexion) {
    echo 'Todo correcto';
} else {
    echo 'Ha ocurrido un error';
}
if (isset($_POST['Modificar'])) {
    if ((!empty($_POST['nombre']) && !empty($_POST['apellido'])&& !empty($_POST['telefono'])&&!empty($_POST['nombreNuevo']) && !empty($_POST['apellidoNuevo'])&& !empty($_POST['telefonoNuevo']))) {
        $nombre = trim($_POST['nombre']);
        $apellido = trim($_POST['apellido']);
        $telefono = trim($_POST['telefono']);
        $nombreNuevo = trim($_POST['nombreNuevo']);
        $apellidoNuevo = trim($_POST['apellidoNuevo']);
        $telefonoNuevo = trim($_POST['telefonoNuevo']);
        $consulta = "UPDATE alumno SET nombre='$nombreNuevo',`apellido`='$apellidoNuevo',`telefono`='telefonoNuevo' WHERE nombre LIKE '$nombre' AND apellido LIKE '$apellido' AND telefono LIKE '$telefono'";
        $resultado = mysqli_query($conexion, $consulta);
        if ($resultado) {
        ?>
            <h3 class="ok">Te has inscrito correctamente</h3>
        <?php
        } else {
        ?>
            <h3 class="bad">Ha ocurrido un error</h3>
    <?php
        }
    }else {
    ?>
    <h3 class="bad">Por favor complete los campos</h3>
    <?php
    }
} 
?>
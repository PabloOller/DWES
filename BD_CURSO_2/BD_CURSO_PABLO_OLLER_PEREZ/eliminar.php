<?php

include("con_db.php");
if ($conexion) {
    echo 'Todo correcto';
} else {
    echo 'Ha ocurrido un error';
}
if (isset($_POST['Eliminar'])) {
    if ((!empty($_POST['nombre']) && !empty($_POST['apellido']))) {
        $nombre = trim($_POST['nombre']);
        $apellido = trim($_POST['apellido']);
        $consulta = "DELETE FROM alumno WHERE nombre LIKE '$nombre' AND apellido LIKE '$apellido'";
        $resultado = mysqli_query($conexion, $consulta);
        if ($resultado) {
        ?>
            <h3 class="ok">Eliminado correctamente</h3>
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


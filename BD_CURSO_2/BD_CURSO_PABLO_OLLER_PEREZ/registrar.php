<?php

include("con_db.php");
if ($conexion) {
    echo 'Todo correcto';
} else {
    echo 'Ha ocurrido un error';
}
if (isset($_POST['registrar'])) {
    if ((!empty($_POST['nombre']) && !empty($_POST['apellido'])&& !empty($_POST['telefono']))) {
        $nombre = trim($_POST['nombre']);
        $apellido = trim($_POST['apellido']);
        $telefono = trim($_POST['telefono']);
        $consulta = "INSERT INTO alumno(nombre, apellido, telefono) VALUES ('$nombre','$apellido','$telefono')";
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
if(isset($_POST['Cerrar'])){
    $cerrado=mysqli_close($conexion);
    if($cerrado){
        ?>
        <br>
        <h3 class="ok">Cerrado correctamente</h3>
    <?php
    } else{
        ?>
        <h3 class="bad">No se ha cerrado</h3>
    <?php
    }
}

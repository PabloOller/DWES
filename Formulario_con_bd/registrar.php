<?php

include("con_db.php");
if ($conexion) {
    echo 'Todo correcto';
} else {
    echo 'Ha ocurrido un error';
}
if (isset($_POST['registrar'])) {
    if ((!empty($_POST['nombre']) && !empty($_POST['email']))) {
        $nombre = trim($_POST['nombre']);
        $email = trim($_POST['email']);
        $fechareg = date("d-m-y");
        $consulta = "INSERT INTO datos(nombre, email, fechareg)  VALUES ('$nombre','$email','$fechareg') ";
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

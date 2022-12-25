<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fecha y hora</title>
</head>

<body>
    <?php
    $datos_fecha_hora = getdate();
    print_r($datos_fecha_hora);
    echo '<br>';

    echo date('Y-m-d');
    echo '<br>';
    echo date('d-m-Y');
    echo '<br>';
    echo date('F');
    ?>
</body>

</html>
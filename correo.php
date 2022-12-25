<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correo</title>
</head>

<body>
    <?php
    $destinatario = "fbusrue027@g.educaand.es, dnielop0204@g.educaand.es";
    $asunto = "Prueba de correo";
    $mensaje = "Esto es una prueba de correeo electronico";
    $cabeceras_adicional = "From: Felix <fcarseg491@g.educaand.es>\r\n";
    $cabeceras_adicional .= "Reply-to: Antonio <aruigon017@g.educaand.es>\r\n";
    $cabeceras_adicional .= "Cc: Victor <vjimgue@g.educaand.es>\r\n";
    $cabeceras_adicional .= "Bcc: Mario <mluqgue229@g.educaand.es>\r\n";


    mail($destinatario, $asunto, $mensaje,$cabeceras_adicional);

    ?>
</body>

</html>
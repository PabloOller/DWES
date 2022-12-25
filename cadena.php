<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadena</title>
</head>

<body>
    <?php
    $cadena_1 = "Es una cadena de texto";
    $cadena_2 = 'Es una cadena de texto';

    //heredoc(here document)
    //Cadena de texto de grandes extensiones
    $cadena_3 = <<<IDENTIFICADOR
    Hola esto es una prueba de texto largo.
    Y puedo seguir escribiendo.
    IDENTIFICADOR;

    $doc = "Si se realiza el cálculo (15*2)+[(12+5)*(4.3+0.45)] obtendremos el importe en $";
    $doc = quotemeta($doc);
    echo $doc;
    echo '<br>';
    echo stripslashes($doc);

    echo "<br>";
    $cadena = "Las negritas van ente <b> y </b>";
    $cadena = htmlentities($cadena);
    echo $cadena;
    /*
    //formato de moneda
    $smoneda = 178.05;
    $bruto_txt=money_format('%(#4n', $bruto);
    echo $moneda;*/


    echo '<br>';
    define('PI', 3.141592);
    echo PI;
    echo '<br>';
    const PRECIO = 30;
    echo PRECIO;
    $_SERVER;
    echo '<br>';

    $metodo=$_SERVER['REQUEST_METHOD'];
    $uri=$_SERVER['REQUEST_URI'];
    foreach($_SERVER as $clave=>$valor){
        echo"\$SERVER['$clave]=$valor <br>";
    }
    ?>
</body>

</html>
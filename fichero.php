<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $archivo="archivo.txt";//nombre del archivo
    $tamanio = filesize($archivo);//Tamaño del fichero
    $fichero = fopen($archivo,'r+');//abrir el archivo
    $contenido=fread($fichero,$tamanio);//leer contenido del archivo
    echo $contenido;
    $nuevo_contenido=". Adios.";
    fwrite($fichero,$nuevo_contenido);

    $posicion =ftell($fichero);//obtiene posicion actual
    echo $posicion;
    fseek($fichero,0);//myeve la tecla hacia el byte indicado
    $posicion = ftell($fichero); //obtiene la posicion actual
    echo $posicion;
    fclose($fichero);//cerrar fichero
    ?>
</body>

</html>
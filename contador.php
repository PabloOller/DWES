<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>
</head>
<body>
    <?php
    function contador_de_visitas(){
        $archivo = "contador.txt";
        $fichero=fopen("$archivo","r+");
        $bytes_tamanio=filesize($archivo);
        $contador=fread($fichero,$bytes_tamanio);
        $nuevo_contador=$contador+1;
        $posicion_actual=ftell($fichero);


        if($posicion_actual==$bytes_tamanio){
            //me muevo al byte 0
            fseek($fichero,0);
        }
        fwrite($fichero, $nuevo_contador);
        fclose($fichero);

        return $nuevo_contador;
        }
        //Actualizamos el numero de visitas
        echo contador_de_visitas();
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    // abre un directorio y lo guardamos en $directorio
    $directorio = opendir("Directorio");

    $archivos = array();
    $directorios = array();
    $accesosDirectos = array();

    // itero solo si readdir no es false
    while (($elemento = readdir($directorio)) !== false) {

        if ($elemento != "." and $elemento != "..") {
            $ruta_elemeto = "../php/Directorio/{$elemento}";

            // comprobamos que tipo de elemento tenemos dentro de la ruta 
            if (is_dir($ruta_elemeto)) {
                $directorios[] = $elemento;
            } else if (is_file($ruta_elemeto)) {
                $archivos[] = $elemento;
            } else if (is_link($ruta_elemeto)) {
                $accesosDirectos[] = $elemento;
            }
        }
    }

    // cierro el directorio
    closedir($directorio);

    $contenido = array("Directorios" => $directorios, "Archivos" => $archivos, "Accesos Directos" => $accesosDirectos);

    print_r($contenido);
    echo '<br>';
    //validando si un archivo existe
    $archivo = '../php/Directorio/archivo.txt';
    if (file_exists($archivo)) {
        echo "El archivo {$archivo} existe <br>";
    } else {
        echo "El archivo {$archivo} no se puede localizar<br>";
    }
    //Validando si un directorio existe
    $directorio = '../php/Directorio';
    if (file_exists($directorio)) {
        echo "El directorio {$directorio} existe <br>";
    } else {
        echo "El directorio {$diectroio} no se puede localizar<br>";
    }

    //validando si un archivo se puede leer
    $archivo = '../php/Directorio/archivo.txt';
    if (is_readable($archivo)) {
        echo "El archivo {$archivo} se puede leer <br>";
    } else {
        echo "El archivo {$archivo} no se puede leer<br>";
    }
    //Validando si un directorio se puede leer
    $directorio = '../php/Directorio';
    if (is_readable($directorio)) {
        echo "El directorio {$directorio} se pude leer <br>";
    } else {
        echo "El directorio {$diectroio} no se puede leer<br>";
    }

    
    //validando si un archivo se puede escribir
    $archivo = '../php/Directorio/archivo.txt';
    if (is_writable($archivo)) {
        echo "El archivo {$archivo} se puede escribir <br>";
    } else {
        echo "El archivo {$archivo} no se puede escribir<br>";
    }
    //Validando si un directorio se puede escribir
    $directorio = '../php/Directorio';
    if (is_writable($directorio)) {
        echo "El directorio {$directorio} se pude escribir <br>";
    } else {
        echo "El directorio {$diectroio} no se puede leer<br>";
    }

    ?>
</body>

</html>
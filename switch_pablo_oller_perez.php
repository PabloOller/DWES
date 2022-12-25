<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Concdicional switch. Ejemplo</h1>
    <form action="https://educacionadistancia.juntadeandalucia.es/centros/malaga/pluginfile.php/582739/assignsubmission_file/submission_files/124246/switch.php" method="GET">
        <input type="text" name="posicion">
        <input type="submit" name="enviar" value="Enviar">
    </form>
    <?php
    /*Declaramos una variable con un valor de muestra*/
    //print_r($_REQUEST);
    if(!empty($_REQUEST['enviar'])){
        $posicion = trim($_REQUEST['posicion']);
        echo "La variable de posicion es ".$posicion;
        echo "<br>";
        switch($posicion){
            case "arriba": //Primer condicion si es arriba
                echo "La variable contiene del valor de arriba";
                break;
            case "abajo": //Segunda condicion del supuesto
                echo "La variable contiene del valor de abajo";
                break;
            default: //Condicion por default o si no es ninguna
            echo "La variable contiene otro valor distinto arriba y abajo";
            break;
        }
    }
    ?>
</body>

</html>
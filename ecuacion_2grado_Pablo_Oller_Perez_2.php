<h1>Ecuación de segundo grado</h1>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecuacion 2</title>
</head>

<body>

    <?php

    $a = 0;
    $b = 0;
    $c = 0;

    if (isset($_POST['botonEnviar'])) {

        $a = $_POST["a"];
        $b = $_POST["b"];
        $c = $_POST["c"];

        echo "<br>" . $a . "x^2 +" . $b . "x +" . $c . "= 0";
        echo "<br> Valor 1 = " . ((-$b + sqrt(($b ** 2) - (4 * $a * $c))) / (2 * $a));

        echo "<br> Valor 2 = " . ((-$b - sqrt(($b ** 2) - (4 * $a * $c))) / (2 * $a));
    }
    ?>
    <form name="ec" action="https://educacionadistancia.juntadeandalucia.es/centros/malaga/pluginfile.php/541476/assignsubmission_file/submission_files/70102/ecuacion_2grado_Pablo_Oller_Perez_2.php" method="POST">
        <input type="text" name="a" size="10px" value="<?php echo $a; ?>">
        <input type="text" name="b" size="10px" value="<?php echo $b; ?>">
        <input type="text" name="c" size="10px" value="<?php echo $c; ?>">
        <br>
        <input type="submit" name="botonEnviar" value="Enviar">
    </form>

</body>

</html>
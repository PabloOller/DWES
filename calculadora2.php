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
    $y=0;
    $z=0;

    if (isset($_POST['btsuma'])) {
        $y = $_POST["a"];
        $z = $_POST["b"];
        $c = $y + $z;
        echo "La suma de " . $y . " + " . $z . " es igual a " . $c;
    }
    if (isset($_POST['btresta'])) {
        $y = $_POST["a"];
        $z = $_POST["b"];
        $c = $y - $z;
        echo "La resta de " . $y . " - " . $z . " es igual a " . $c;
    }
    if (isset($_POST['btmultiplicacion'])) {
        $y = $_POST["a"];
        $z = $_POST["b"];
        $c = $y * $z;
        echo "La multiplicación de " . $y . " * " . $z . " es igual a " . $c;
    }
    if (isset($_POST['btdivision'])) {
        $y = $_POST["a"];
        $z = $_POST["b"];
        if($z!=0){
        $c = $y / $z;
        echo "La división de " . $y . " / " . $z . " es igual a " . $c;
        } else {
            echo "No se puede hacer la división entre 0";
        }
    }


    ?>
    <form name="calc" action="https://educacionadistancia.juntadeandalucia.es/centros/malaga/pluginfile.php/541437/assignsubmission_file/submission_files/70066/calculadora2.php" method="POST">
        <input type="text" name="a" size="10px" value="<?php echo $y; ?>">
        <input type="text" name="b" size="10px" value="<?php echo $z; ?>">
        <br>
        <input type="submit" name="btsuma" value="suma" size="10px">
        <input type="submit" name="btresta" value="resta" size="10px">
        <br>
        <input type="submit" name="btmultiplicacion" value="multiplicacion" size="10px">
        <input type="submit" name="btdivision" value="división" size="10px">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>
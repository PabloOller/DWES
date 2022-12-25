<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Salario</title>
    <style>
        body {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        form {
            margin-top: 50px;
            border: solid 2px red;
            border-radius: 20px;
            margin-left: 25%;
            width: 700px;
            height: 500px;
            background-color: #ffbaba;
            padding-left: 10px;
            display: grid;
            grid-template-columns: [A] 50% [B] 50% [C];
            grid-template-rows: [T] 33% [U] 13.2% [V] 13.2% [W] 13.2% [X] 13.2% [Y] 13.2% [Z];
        }

        #cabecera {
            grid-column: A/C;
            grid-row: T/U;
            text-align: center;
        }

        #nombre {
            grid-column: A/B;
            grid-row: U/V;
        }

        #apellidos {
            grid-column: A/B;
            grid-row: V/W;
        }

        #salario {
            grid-column: A/B;
            grid-row: W/X;
        }

        #edad {
            grid-column: A/B;
            grid-row: X/Y;
        }

        #nombreF {
            grid-column: B/C;
            grid-row: U/V;
        }

        #apellidosF {
            grid-column: B/C;
            grid-row: V/W;
        }

        #salarioF {
            grid-column: B/C;
            grid-row: W/X;
        }

        #edadF {
            grid-column: B/C;
            grid-row: X/Y;
        }

        #boton {
            grid-column: A/C;
            grid-row: Y/Z;
        }

        #buton {
            margin-left: 250px;
            font-size: 26px;
            border-color: red;
            color: white;
            background-color: red;
            border-radius: 50px;
            width: 200px;
            height: 50px;
        }

        form h1 {
            color: red;
        }

        form p {
            width: 420px;
            text-align: left;
        }
    </style>
</head>

<body>
    <?php
    $comprobacion = 0;

    $nombre;
    $apellido;
    $edad;
    $salario;


    if (!empty($_REQUEST)) {
        $nombre = $_REQUEST['nombre'];
        $apellido = $_REQUEST['apellido'];
        $edad = $_REQUEST['edad'];
        $salario =$_REQUEST['salario'];

        if (!ctype_alpha($nombre)) {
            $nombre = 'Error en el campo nombre';
            echo '<br>';
        } else {
            $comprobacion++;
            echo '<br>';
            echo 'Nombre: ' . $nombre;
        }

        if (!ctype_alpha($apellido)) {
            echo '<br>';
            $apellido =  'Error en el campo apellidos';
        } else {
            $comprobacion++;
            echo '<br>';
            echo 'Apellido: ' . $apellido;
        }


        if (!is_numeric($edad)) {
            echo '<br>';
            $edad =  'Error en el campo edad';
        } else {
            $comprobacion++;
            echo '<br>';
            echo 'Edad: ' . $edad;
        }


        if (!is_numeric($salario)) {
            echo '<br>';
            $salario =  'Error en el campo salario';
        } else {
            $comprobacion++;
        }

        if ($comprobacion == 4) {
            echo 'salario correcto';
            $comprobacion=0;
        } else {
            echo '<h1>FALTAN DATOS</h1>';
        }
    }

    ?>
    <form action="https://educacionadistancia.juntadeandalucia.es/centros/malaga/pluginfile.php/593040/assignsubmission_file/submission_files/142514/Pablo_Oller_Perez_Salario.php" method="POST">
        <div id="cabecera">
            <h1>Cálculo de tu salario</h1>
            <p>Calcula tu nómina de forma sencilla. En función de tu <b>edad y salario</b>, conocerás el <b>sueldo del que dispondrás.</b></p>
        </div>
        <div id="nombre">
            Nombre<span style="color: red;">*</span>:

        </div>
        <div id="nombreF">
            <input type="text" name="nombre" id="nombre" value="<?php if (!empty($nombre)) {
                                                                    echo $nombre;
                                                                } ?>">
        </div>

        <div id="apellidos">
            Apellidos<span style="color: red;">*</span>:
        </div>
        <div id="apellidosF">
            <input type="text" name="apellido" id="apellido" value="<?php if (!empty($apellido)) {
                                                                    echo $apellido;
                                                                }?>">
        </div>

        <div id="salario">
            Salario mensual<span style="color: red;">*</span>:

        </div>
        <div id="salarioF">
            <input type="text" name="salario" id="salario" value="<?php if (!empty($salario)) {
                                                                echo $salario;
                                                            }  ?>">€
        </div>
        <div id="edad">
            Edad<span style="color: red;">*</span>:

        </div>
        <div id="edadF">
            <input type="text" name="edad" id="Edad" value="<?php if (!empty($edad)) {
                                                                        echo $edad;
                                                                    }  ?>">
        </div>
        <div id="boton">
            <input id="buton" type="submit" name="calcular" value="Calcular">
        </div>
    </form>

</body>

</html>
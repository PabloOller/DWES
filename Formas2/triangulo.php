<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Areas</title>
    <style>
        @font-face {
            font-family: ComicSans;
            src: url("fuentes/Qdbettercomicsans-jEEeG.ttf");
        }
        body {
            font-family: ComicSans;
            background: rgb(212, 163, 0);
            background: linear-gradient(0deg, rgba(212, 163, 0, 1) 0%, rgba(246, 240, 224, 1) 55%, rgba(0, 212, 255, 1) 100%);
        }

        #mainer {
            display: grid;
            grid-template-columns: [A]1fr [B]1fr [C]1fr [D]1fr[E];
            grid-template-rows: [X]250px [Y]250px [Z]250px [Q]250px [W];
            column-gap: 10px;
        }

        header {
            grid-column: A/E;
            text-align: center;
            grid-row: X/Y;
            font-size: larger;
            color: #B26729;
        }

        main {
            grid-column: A/E;
            grid-row: Y/W;
        }

        #enlace {
            grid-column: A/E;
            grid-row: Y/Z;
            text-align: center;
            font-size: 30px;
            font-family: sans-serif;
        }

        #imagen {
            float: right;
            position: relative;
            grid-column: B/D;
            grid-row: Z/Q;
        }

        #descripcion {
            color: #B26729;
            grid-column: A/E;
            grid-row: Y/Z;
            text-align: center;
            font-size: 25px;
        }

        #areaTr {
            position: relative;
            float: inline-end;
            margin-left: 46%;
        }

        #formulario {
            width: 400px;
            margin: 0 auto;
            grid-column: B/D;
            grid-row: Q/W;
        }

        #resp {
            border: solid 4px brown;
            color:burlywood;
            text-align: center;
            padding-top: 50px;
            background-color: #B26729;
            border-radius: 30px;
            font-size: 25px;
            width: 700px;
            height: 150px;
            margin: 0 auto;
            grid-column: C/E;
            grid-row: Q/W;
        }
        #cont{
            float: right;
            background-color: #B26729;
            border-radius: 30px;
            border: solid 3px #D8AB17;
            height: 80px;
            width: 300px;
            margin: 0 auto;
            text-align: center;
        }

        footer {
            border: solid 4px brown;
            color: burlywood;
            background-color: #B26729;
            border-radius: 30px;
            padding-top: 10px;
            height: 80px;
            width: 300px;
            margin: 0 auto;
            text-align: center;
        }
    </style>
</head>

<body>
    <img src="img/sol.png">
    <div id="cont">
        Contador de visitas:
        <?php
        function contador_de_visitas()
        {
            $archivo = "contadorr.txt";
            $fichero = fopen("$archivo", "r+");
            $bytes_tamanio = filesize($archivo);
            $contador = fread($fichero, $bytes_tamanio);
            $nuevo_contador = $contador + 1;
            $posicion_actual = ftell($fichero);


            if ($posicion_actual == $bytes_tamanio) {
                //me muevo al byte 0
                fseek($fichero, 0);
            }
            fwrite($fichero, $nuevo_contador);
            fclose($fichero);

            return $nuevo_contador;
        }
        //Actualizamos el numero de visitas
        echo contador_de_visitas();
        ?>
    </div>
    <div id="mainer">  
        <header>
            <h1>Aprende areas facilmente🙂</h1>
            <h2>Vamos a calcular el area de un cuadrado y de un triangulo</h2>

        </header>
        <main>
            <div id="enlace">
                <a href="caudrado.php">
                    <h4>TRIÁNGULO</h4>
                </a>
            </div>
            <div id="descripcion">
                <p>
                    Para calcular el area del triangulo vamos a necesitar la base y la altura, por favor, indica la base y la altura del triangulo:
                </p>
            </div>
            <img id="areaTr" src="img/areaT.png">
            <div id="imagen">
                <img src="img/piramide.png">
            </div>
            <div id="formulario">
                <form name="calc" action="triangulo.php" method="GET">
                    Base:
                    <input type="text" name="BaseTriangulo" size="10px" value="">
                    Altura:
                    <input type="text" name="AlturaTriangulo" size="10px" value="">
                    <input type="submit" name="calcularArea" value="CALCULAR" size="10px">
                </form>
            </div>
            <br>
            <br>
            <div id="resp">
                <?php
                if ($_GET) {
                    if (empty($_REQUEST['BaseTriangulo'])) {
                        $y = 0;
                    } else if (!empty($_REQUEST['BaseTriangulo'])) {
                        $y = $_GET["BaseTriangulo"];
                    }
                    if (empty($_REQUEST['AlturaTriangulo'])) {
                        $z = 0;
                    } else if (!empty($_REQUEST['AlturaTriangulo'])) {
                        $z = $_GET["AlturaTriangulo"];
                    }
                    $area = $y * $z / 2;
                    echo "El area del triangulo de " . $y . " cm de base y ".$z." cm de altura es de " . $area . " cm cuadrados!! ";
                    echo "<br> ¡¡¡MUY BIEN!!!";
                }
                ?>
            </div>
        </main>
    </div>
    <footer>
        <div class="click-copyrights-text">Pablo Oller © 2022</div>
        <br>
        <a href="https://www.instagram.com/paablooller/?hl=es">Mis redes sociales</a>
        <a href="https://es.linkedin.com/in/pablo-oller-p%C3%A9rez-7995721b2?trk=people-guest_people_search-card">Mi LinkedIn</a>
        <a href="https://github.com/PabloOller">Mi Github</a>
    </footer>
</body>

</html>
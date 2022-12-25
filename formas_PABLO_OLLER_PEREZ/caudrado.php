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
            background-position: fixed;
            background-image: url("img/fondoCuadrado.jpg");
            background-size: 2100px;
        }

        header {
            margin: 0 auto;
            margin-top: -25px;
            text-align: center;
            background-image: url("img/nube.png");
            color: #0071B3;
            background-size: 800px;
            width: 800px;
            height: 320px;
        }

        #main {
            margin: 0 auto;
            width: fit-content;
        }

        #main table td {
            text-align: center;
        }

        #main table #enlace {
            font-size: 30px;
            font-family: sans-serif;
        }

        #main table #descripcion {
            padding: 10px;
            border: solid 4px #495056;
            background-color: #7F838C;
            color: aqua;
            font-size: 25px;
        }

        #areaCr {
            float: right;
            border: solid 3px blue;
            border-radius: 5px;
        }
        #main table #formulario {
            color: darkblue;
            text-align: left;
            font-size: 30px;
        }

        #main table #respuesta {
            border: solid 4px #1F4011;
            background-color: #3E8F37;
            color: #132D0E;
            border-radius: 10px;
            padding-top: 30px;
            font-size: 35px;
            padding-bottom: 30px;
        }

        #boton {
            height: 80px;
            border: solid 3px #495056;
            background-color: #7F838C;
            color: aqua;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-weight: bold;
        }

        #imagen {
            float: right;
            margin-top: -280px;
        }

        #imagen2 {
            float: left;
            margin-top: -280px;
        }

        footer {
            border: solid 4px #553324;
            color: burlywood;
            padding-top: 20px;
            background-color: #A66F2F;
            border-radius: 30px;
            height: 80px;
            width: 300px;
            margin: 0 auto;
            margin-top: 25px;
            text-align: center;
        }
    </style>
</head>

<body>
    <header>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h1>Aprende areas facilmente🙂</h1>
        <h2>Vamos a calcular el area de un cuadrado y de un triangulo</h2>
    </header>
    <img id="imagen" src="img/cuadrado.png">
    <img id="imagen2" src="img/steve.png">
    <div id="main">
        <table>
            <tr>
                <td id="enlace" colspan="2">
                    <a href="triangulo.php">
                        <h4>CUADRADO</h4>
                    </a>
                </td>
            </tr>
            <tr>
                <td id="descripcion" colspan="2">
                    Para calcular el area del cuadrado solo vamos a necesitar uno de los lados, por favor, indica el lado del cuadrado:
                </td>
            </tr>
            <tr>
                <td><img id="areaCr" src="img/areaC.png" width="210"></td>
                <td id="formulario">
                    <form name="calc" action="caudrado.php" method="GET">
                        LADO:<br>
                        <input type="text" name="lado" size="10px" value="">
                        <input type="submit" name="calcularArea" id="boton" value="CALCULAR" size="10px">
                    </form>
                </td>
            </tr>
            <tr>
                <td colspan="2" id="respuesta">
                    <?php
                    if ($_GET) {
                        if (empty($_REQUEST['lado'])) {
                            $x = 0;
                        } else if (!empty($_REQUEST['lado'])) {
                            $x = $_GET['lado'];
                        }
                        $area = $x ** 2;
                        echo "El area del cuadrado de " . $x . " cm de largo es de " . $area . " cm cuadrados!! ";
                        echo "<br> ¡¡¡MUY BIEN!!!";
                    }
                    ?>
                </td>
            </tr>
        </table>
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
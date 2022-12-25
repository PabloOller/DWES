<?php
print_r($_REQUEST);

echo 'A continuación te confirmamos los datos que tu has escrito: <br>';

if (!empty($_REQUEST['nombre']) && !empty($_REQUEST['apellidos'])) {
    echo '<br> El nombre es ' . $_REQUEST['nombre'];
    echo '<br> El apellido es ' . $_REQUEST['apellidos'];
}
if (!empty($_REQUEST['fecha'])) {
    echo '<br> Tu fecha de nacimiento es ' . $_REQUEST['fecha'];
}
if (!empty($_REQUEST['correo'])) {
    echo '<br> El correo electrónico es ' . $_REQUEST['correo'];
}
if (!empty($_REQUEST['usuario'])) {
    echo '<br> El usuario es ' . $_REQUEST['usuario'];
}
if (!empty($_REQUEST['contraseña'])) {
    if ($_REQUEST['contraseña'] == $_REQUEST['contraseña2']) {
        echo '<br> Las contraseñas coinciden.';
    } else {
        echo '<br> ¡¡¡ERROR: Las contraseñas no coinciden.!!!';
    }
}
echo '<br> A continuación se procederan a ver las opciones de tiempo libre que se han escogido:';

if (!empty($_REQUEST['casilla1'])) {
    echo '<br> Ver series y películas.	';
}

if (!empty($_REQUEST['casilla2'])) {
    echo '<br> Salir con tus amigos.';
}

if (!empty($_REQUEST['casilla3'])) {
    echo '<br> Jugar videojuegos.
    ';
}

if (!empty($_REQUEST['casilla4'])) {
    echo '<br> Hacer deporte.';
}

if (!empty($_REQUEST['casilla5'])) {
    echo '<br> Escuchar música.';
}

if (!empty($_REQUEST['casilla6'])) {
    echo '<br> No tienes tiempo libre.
    ';
}

if (!empty($_REQUEST['radio1'])) {
    $resp = $_REQUEST['radio1'];
    if ($_REQUEST['radio1'] == 'uno') {
        echo '<br> Te trataremos como un hombre';
    } else if ($_REQUEST['radio1'] == 'dos') {
        echo '<br> La Te trataremos como una mujer';
    } else if ($_REQUEST['radio1'] == 'tres') {
        echo '<br> Te trataremos con genero neutro';
    } else if ($_REQUEST['radio1'] == 'cuatro') {
        echo '<br> La Te trataremos como un helicóptero apache de combate😈';
    }
}
if (!empty($_REQUEST['menu1'])) {
    if ($_REQUEST['menu1'] == 'Español') {
        echo '<br> Todos los textos se te mostrarán en ' . $_REQUEST['menu1'];
    }
    if ($_REQUEST['menu1'] == 'Inglés') {
        echo '<br> Todos los textos se te mostrarán en ' . $_REQUEST['menu1'];
    }
    if ($_REQUEST['menu1'] == 'Francés') {
        echo '<br> Todos los textos se te mostrarán en ' . $_REQUEST['menu1'];
    }
    if ($_REQUEST['menu1'] == 'Portugués') {
        echo '<br> Todos los textos se te mostrarán en ' . $_REQUEST['menu1'];
    }
    if ($_REQUEST['menu1'] == 'Italiano') {
        echo '<br> Todos los textos se te mostrarán en ' . $_REQUEST['menu1'];
    }
    if ($_REQUEST['menu1'] == 'Árabe') {
        echo '<br> Todos los textos se te mostrarán en ' . $_REQUEST['menu1'];
    }
    if ($_REQUEST['menu1'] == 'Chino') {
        echo '<br> Todos los textos se te mostrarán en ' . $_REQUEST['menu1'];
    }
    if ($_REQUEST['menu1'] == 'Indio') {
        echo '<br> Todos los textos se te mostrarán en ' . $_REQUEST['menu1'];
    }
    if ($_REQUEST['menu1'] == 'Otro') {
        echo '<br> Todos los textos se te mostrarán en Español';
    }
}


if (!empty($_REQUEST['telefono'])) {
    $telefono = $_REQUEST['telefono'];
    if(is_numeric($telefono)){
        echo '<br>Tu numero de teléfono es'.$telefono;
    } else{
        echo '<br>NO VALIDO';
    }
}
if (!empty($_REQUEST['oculto'])) {
    echo '<br>' . $_REQUEST['oculto'];
}
?>
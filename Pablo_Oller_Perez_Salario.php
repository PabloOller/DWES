<?php

if (!empty($_REQUEST['salario'])&&!empty($_REQUEST['edad'])&&!empty($_REQUEST['nombre'])&&!empty($_REQUEST['apellido'])) {
    $salario = $_REQUEST['salario'];
    $edad = $_REQUEST['edad'];

    if ($salario >= 0 && $salario <= 2000) {

        if ($salario >= 1000 && $salario <= 2000) {

            if ($edad < 18 || $edad > 100) {
                echo 'Edad no válida';
            } else {
                if ($edad > 45) {
                      $salario *= 1.03;
                } else {
                      $salario *= 1.1;
                }
            }
        } else if ($salario < 1000) {
            if ($edad < 30) {
                 $salario = 1100;
            } else if ($edad >= 30 && $edad <= 45) {
                  $salario *= 1.03;
            } else if ($edad > 45) {
                  $salario *= 1.15;
            }
        }
        echo '<h1> El salario es de '.$salario.'€</h1>';
    } else if ($salario < 0) {
        echo '<h1> El salario es menor que 0, no existe </h1>';
    } else if ($salario > 2000) {
        echo '<h1> El salario es mayor que 2000 </h1>';
    }
}
include('Pablo_Oller_Perez_index.php');

?>
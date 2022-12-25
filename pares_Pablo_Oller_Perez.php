<h1>Entrega programa sumar pares del 2 al 100</h1>

<?php

$suma = 0;
for ($i = 0; $i <= 100; $i += 2) {
    $suma += $i;
}
echo "<br> La suma sale: ".$suma;

?>
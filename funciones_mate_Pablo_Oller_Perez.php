<?php
//pi

echo pi();
echo "<br>";

//minimo

$num1=5.066;
$num2=25;
$num3=-5;

echo "<br> El minimo de los dos números es ".min($num1,$num2);

//maximo

echo "<br> El máximo de los dos números es ".max($num1,$num2);

//valor absoluto

echo "<br> El valor absoluto del tercer número es ".abs($num3);

//raiz cuadrada

echo "<br> La raiz cuadrada de un numero es ".sqrt($num2);

//redondeo

echo "<br> El valor redondeado de un número es ".round($num1);

//rand

echo "<br> Un número aleatorio es ".rand();

//rand con parametros

echo "<br> Un número aleatorio con valores es ".rand(10,100);

//truncado

echo "<br> El valor truncado de un número es ".floor($num1);

?>
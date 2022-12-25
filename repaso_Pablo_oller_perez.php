<?php
$entero=5;
$cadena="Hola";
$booleano = false;
$decimal = 5.5;


echo isset($entero).'<br>';
echo isset($cadena).'<br>';
echo isset($booleano).'<br>';
echo isset($decimal).'<br>';
/*var_dump($entero);
var_dump($cadena);
var_dump($booleano);
var_dump($decimal);*/


$tipo_entero=gettype($entero);
echo $tipo_entero.'<br>';
$tipo_caracter=gettype($cadena);
echo $tipo_caracter.'<br>';
$tipo_booleano=gettype($booleano);
echo $tipo_booleano.'<br>';
$tipo_decimal=gettype($decimal);
echo $tipo_decimal;

$entero=NULL;
$cadena="";
unset($booleano);
$decimal+=1;


/*var_dump($entero);
var_dump($cadena);
var_dump($booleano);
var_dump($decimal);
*/

echo isset($entero).'<br>';
echo isset($cadena).'<br>';
echo isset($booleano).'<br>';
echo isset($decimal).'<br>';

?>
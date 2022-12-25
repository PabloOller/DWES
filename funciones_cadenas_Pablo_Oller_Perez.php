<?php

//Funciones con cadena de caracteres

$cadena1="mi casa es roja";
$cadena2="no es amarilla";

//devuelve la longitud

echo "<br> La longitud de mi cadena es: " .strlen($cadena1);

//cuenta las palabras

echo "<br> Las palabras de mi cadena son: " .str_word_count($cadena1);

//invierte la cadena

echo "<br> La cadena invertida es: " .strrev($cadena1);

//devuelve la primera posicion de la cadena encontrada

echo "<br> La longitud de mi cadena es: " .strpos($cadena1,"roja");

//reemplaza

echo "<br> Reemplazar roja por amarilla en mi cadena: " .str_replace("roja","amarilla",$cadena1)."<br>";

//determinar que tipo de variable es

var_dump($cadena1);

?>
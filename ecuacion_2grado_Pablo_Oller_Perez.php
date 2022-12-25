<h1>Ecuación de segundo grado</h1>

<?php

$a=1;
$b=3;
$c=2;

echo "<br> x^2 +".$b."x +".$c."= 0";

echo "<br> Valor 1 = ".((-$b+sqrt(($b**2)-(4*$a*$c)))/(2*$a));

echo "<br> Valor 2 = ".((-$b-sqrt(($b**2)-(4*$a*$c)))/(2*$a));


?>
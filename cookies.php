<?php
$nombre="nombre_y_apellidos";//obligatorio
$valor="Paqui bustamante";//obligatorio
$expira=time()+(3600*24*365);//un año
$dir='/';
$https=FALSE;
$http=TRUE;
$dominio="";
setcookie($nombre,$valor,$expira,$dir,$dominio,$https,$http);

echo "Hola {$_COOKIE["$nombre"]}!";
$nombre="nombre_y_apellidos";//obligatorio
$valor="David bustamante";//obligatorio
echo "<br>";
setcookie($nombre,$valor);
echo "Hola {$_COOKIE["$nombre"]}!";
$nombre="nombre_y_apellidos";//obligatorio
$valor=NULL;//obligatorio
echo "<br>";
setcookie($nombre,$valor);
echo "Hola {$_COOKIE["$nombre"]}!";

?>
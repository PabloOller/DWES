<?php
$link='mysql:host=localhost:3307 ;dbname=colores';
$usuario='root';
$contraseña ='';

try{
    $pdo= new PDO($link,$usuario,$contraseña);
    echo 'Conectado <br>';
    foreach($pdo->query('SELECT * from color') as $fila){
        print_r($fila);
    }
}catch(PDOException $e){
    print "Error: ".$e->getMessage()."<br>";
    die();
}


?>
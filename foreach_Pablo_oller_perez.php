<?php

$nombres=array('Pablo','Paco','Mar','Manu','Dario');
$edad=10;
/*
foreach($nombres as $key){
echo $key.'<br>';
}
foreach($nombres as $key=>$value){
    echo $key.$value.'<br>';
}
*/
foreach($nombres as &$nombre){
    $nombre=strtoupper($nombre);
}
print_r($nombres);

if(is_array($nombres)){
    echo '<br> Es un arrray ';
}else{
    echo '<br> No es un arrray ';
}
if(is_array($edad)){
    echo '<br> Es un arrray '.$edad;
}else{
    echo '<br> No es un arrray '.$edad;
}

<?php
if(isset($_POST['Enviar'])){
    if(!empty($_POST['visitor_name'])){
        $nombre = $_POST['visitor_name'];
    }
    
    if(!empty($_POST['visitor_email'])){
        $correo = $_POST['visitor_email'];
    }
    
    if(!empty($_POST['concerned_department'])){
        $departamento = $_POST['concerned_department'];
    }
    
    if(!empty($_POST['email_title'])){
        $titulo = $_POST['email_title']+" "+$departamento;
    }
    if(!empty($_POST['visitor_message'])){
        $mensaje = $_POST['visitor_message'];
    }
    mail($correo, $titulo, $mensaje);
}

<?php
$conexion= mysqli_connect("localhost","root","","aburracuida");

if(isset($_POST['registrar'])){

    if(strlen($_POST['id']) >= 1 && strlen($_POST['datos']) >= 1 && strlen($_POST['entrevista']) >= 1 &&
    strlen($_POST['hora']) >=1 && strlen($_POST['Observaciones']) >=1){

        $id = trim($_POST['id']);
        $datos = trim($_POST['datos']);
        $entrevista = trim($_POST['entrevista']);
        $hora = trim($_POST['hora']);
        $Observaciones = trim($_POST['Observaciones']);
       
        $consulta= "INSERT INTO agenda (id, datos, entrevista, hora, Observaciones) 
        VALUES ('$id','$datos','$entrevista','$hora','$Observaciones')";
    
        mysqli_query($conexion, $consulta);
        mysqli_close($conexion);    

        header('Location: ../views/agendaPsicologo.php');

    }
    
}



?> 
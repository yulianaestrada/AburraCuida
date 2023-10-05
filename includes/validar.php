<?php
$conexion= mysqli_connect("localhost","root","","aburracuida");

if(isset($_POST['registrar'])){

    if(strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['tipo']) >= 1 &&
    strlen($_POST['identificacion']) >=1 && strlen($_POST['sexo']) >=1 && strlen($_POST['edad']) >=1 && 
    strlen($_POST['celular']) >=1 && strlen($_POST['email']) >=1 && strlen($_POST['municipio']) >=1 && 
    strlen($_POST['residencia']) >=1 && strlen($_POST['tipo']) >=1 && strlen($_POST['detalle']) >=1 && 
    strlen($_POST['Factor']) >=1 && strlen($_POST['nombreagresor']) >=1 && strlen($_POST['direagresor']) >=1 && 
    strlen($_POST['Parentesco']) >=1 ){

        $id = trim($_POST['id']);
        $fecha = trim($_POST['fecha']);
        $nombre = trim($_POST['nombre']);
        $apellido = trim($_POST['apellido']);
        $tipo = trim($_POST['tipo']);
        $identificacion = trim($_POST['identificacion']);
        $sexo = trim($_POST['sexo']);
        $edad = trim($_POST['edad']);
        $celular = trim($_POST['celular']);
        $email = trim($_POST['email']);
        $municipio = trim($_POST['municipio']);
        $residencia = trim($_POST['residencia']);
        $tipocaso = trim($_POST['tipocaso']);
        $detalle = trim($_POST['detalle']);
        $Factor = trim($_POST['Factor']);
        $nombreagresor = trim($_POST['nombreagresor']);
        $direagresor = trim($_POST['direagresor']);
        $Parentesco = trim($_POST['Parentesco']);

        $consulta= "INSERT INTO casos1 (id, fecha, nombre, apellido, tipo, identificacion, sexo, edad, celular, email,
        municipio, residencia, tipocaso, detalle, Factor, nombreagresor, direagresor, Parentesco) 
        VALUES ('$id','$fecha','$nombre','$apellido','$tipo','$identificacion','$sexo','$edad','$celular','$email','$municipio','$residencia','$tipocaso','$detalle',
        '$Factor','$nombreagresor','$direagresor','$Parentesco')";
    
        mysqli_query($conexion, $consulta);
        mysqli_close($conexion);    

        header('Location: ../views/index.php');

    }
    
}



?> 
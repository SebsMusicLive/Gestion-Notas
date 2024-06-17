<?php

include ('../../../../app/config.php');

$gestion = $_POST['gestion'];
$gestion = mb_strtoupper($gestion, 'UTF-8');
$estado = $_POST['estado'];


if($estado == 'ACTIVO'){
    $estado = 1;
}else{
    $estado = 0;
}

if ($gestion == "") {
    session_start();
    $_SESSION['mensaje'] = 'No se pueden agregar datos vacíos';
    $_SESSION['icono'] = 'error';
    header('Location:' . APP_URL . '/admin/configuraciones/gestion');
} else {
    $sentencia = $pdo->prepare("INSERT INTO gestiones (gestion, fyh_creacion,estado)
VALUES (:gestion,:fyh_creacion,:estado)");
    $sentencia->bindParam('gestion', $gestion);
    $sentencia->bindParam('fyh_creacion', $fechaHora);
    $sentencia->bindParam('estado', $estado);

    try{
        if ($sentencia->execute()) {
            session_start();
            $_SESSION['mensaje'] = 'Se registró la gestión correctamente';
            $_SESSION['icono'] = 'success';
            header('Location:' . APP_URL . '/admin/configuraciones/gestion');
        } else {
            session_start();
            $_SESSION['mensaje'] = 'Ocurrió un error al registrar en la base de datos';
            $_SESSION['icono'] = 'error';
            header('Location:' . APP_URL . '/admin/configuraciones/gestion');
        }
    }catch(Exception $e){
        session_start();
            $_SESSION['mensaje'] = 'Esta gestión ya existe en la base de datos';
            $_SESSION['icono'] = 'error';
            header('Location:' . APP_URL . '/admin/configuraciones/gestion/create.php');
    }

    
}


?>
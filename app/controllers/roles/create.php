<?php

include ('../../../app/config.php');

$nombre_rol = $_POST['nombre_rol'];
$nombre_rol = mb_strtoupper($nombre_rol, 'UTF-8');

if ($nombre_rol == "") {
    session_start();
    $_SESSION['mensaje'] = 'No se pueden agregar datos vacíos';
    $_SESSION['icono'] = 'error';
    header('Location:' . APP_URL . '/admin/roles');
} else {
    $sentencia = $pdo->prepare("INSERT INTO roles (nombre_rol, fyh_creacion,estado)
VALUES (:nombre_rol,:fyh_creacion,:estado)");
    $sentencia->bindParam('nombre_rol', $nombre_rol);
    $sentencia->bindParam('fyh_creacion', $fechaHora);
    $sentencia->bindParam('estado', $estado_de_registro);

    try{
        if ($sentencia->execute()) {
            session_start();
            $_SESSION['mensaje'] = 'Se registró el rol correctamente';
            $_SESSION['icono'] = 'success';
            header('Location:' . APP_URL . '/admin/roles');
        } else {
            session_start();
            $_SESSION['mensaje'] = 'Ocurrió un error al registrar el rol';
            $_SESSION['icono'] = 'error';
            header('Location:' . APP_URL . '/admin/roles');
        }
    }catch(Exception $e){
        session_start();
            $_SESSION['mensaje'] = 'Este rol ya existe en la base de datos';
            $_SESSION['icono'] = 'error';
            header('Location:' . APP_URL . '/admin/roles/create.php');
    }

    
}


?>
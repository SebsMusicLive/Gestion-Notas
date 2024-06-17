<?php

include('../../../../app/config.php');

$id_gestion = $_POST['id_gestion'];
$gestion = $_POST['gestion'];
$gestion = mb_strtoupper($gestion, 'UTF-8');
$estado = $_POST['estado'];


if ($estado == 'ACTIVO') {
    $estado = 1;
} else {
    $estado = 0;
}

if ($gestion == "") {
    session_start();
    $_SESSION['mensaje'] = 'No se pueden agregar datos vacíos';
    $_SESSION['icono'] = 'error';
    header('Location:' . APP_URL . '/admin/configuraciones/gestion');
} else {
    $sentencia = $pdo->prepare("UPDATE gestiones 
SET   gestion=:gestion,
      fyh_actualizacion =:fyh_actualizacion,
      estado=:estado
WHERE id_gestion=:id_gestion");

    $sentencia->bindParam('id_gestion', $id_gestion);
    $sentencia->bindParam('gestion', $gestion);
    $sentencia->bindParam('fyh_actualizacion', $fechaHora);
    $sentencia->bindParam('estado', $estado);


    if ($sentencia->execute()) {
        session_start();
        $_SESSION['mensaje'] = 'Se actualizó la gestión correctamente';
        $_SESSION['icono'] = 'success';
        header('Location:' . APP_URL . '/admin/configuraciones/gestion');
    } else {
        session_start();
        $_SESSION['mensaje'] = 'Ocurrió un error al actualizar en la base de datos';
        $_SESSION['icono'] = 'error';
        header('Location:' . APP_URL . '/admin/configuraciones/gestion');
    }
}

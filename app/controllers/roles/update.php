<?php
include ('../../../app/config.php');

$nombre_rol = $_POST['nombre_rol'];
$id_rol = $_POST['id_rol'];
$nombre_rol = mb_strtoupper($nombre_rol, 'UTF-8');

if ($nombre_rol == "") {
    session_start();
    $_SESSION['mensaje'] = 'No se pueden agregar datos vacíos';
    $_SESSION['icono'] = 'error';
    header('Location:' . APP_URL . '/admin/roles/edit.php?id='.$id_rol);
} else {
    $sentencia = $pdo -> prepare("UPDATE roles 
                SET nombre_rol=:nombre_rol,
                fyh_actualizacion=:fyh_actualizacion 
                WHERE id_rol = :id_rol");
    $sentencia->bindParam('nombre_rol', $nombre_rol);
    $sentencia->bindParam('fyh_actualizacion', $fechaHora);
    $sentencia->bindParam('id_rol', $id_rol);

    try{
        if ($sentencia->execute()) {
            session_start();
            $_SESSION['mensaje'] = 'Se actualizó el rol correctamente';
            $_SESSION['icono'] = 'success';
            header('Location:' . APP_URL . '/admin/roles');
        } else {
            session_start();
            $_SESSION['mensaje'] = 'Ocurrió un error al actualizar el rol';
            $_SESSION['icono'] = 'error';
            header('Location:' . APP_URL . '/admin/roles/edit.php?id='.$id_rol);
        }
    }catch(Exception $e){
        session_start();
            $_SESSION['mensaje'] = 'Este rol ya existe en la base de datos';
            $_SESSION['icono'] = 'error';
            header('Location:' . APP_URL . '/admin/roles/edit.php?id='.$id_rol);
    }

    
}


?>
<?php

include '../../../app/config.php';

$id_administrativo = $_POST['id_administrativo'];
$id_usuario = $_POST['id_usuario'];
$id_persona = $_POST['id_persona'];

$rol_id = $_POST['rol_id'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$documento_identidad = $_POST['documento_identidad'];
$email = $_POST['email'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$celular = $_POST['celular'];
$profesion = $_POST['profesion'];
$direccion = $_POST['direccion'];

$pdo->beginTransaction();

//Actualizar a la tabla usuarios
$password = password_hash($documento_identidad, PASSWORD_DEFAULT) . "\n";
$sentencia = $pdo->prepare("UPDATE usuarios
                            SET rol_id=:rol_id,
                            email=:email,
                            password=:password, 
                            fyh_actualizacion=:fyh_actualizacion
                            WHERE id_usuario =:id_usuario");

$sentencia->bindParam(':rol_id', $rol_id);
$sentencia->bindParam(':email', $email);
$sentencia->bindParam(':password', $password);
$sentencia->bindParam('fyh_actualizacion', $fechaHora);
$sentencia->bindParam(':id_usuario', $id_usuario);
$sentencia->execute();


//Actualizar a la tabla personas
$sentencia = $pdo->prepare('UPDATE personas
                            SET nombres=:nombres,
                            apellidos=:apellidos,
                            documento_identidad=:documento_identidad,
                            fecha_nacimiento=:fecha_nacimiento,
                            celular=:celular,
                            profesion=:profesion,
                            direccion=:direccion,
                            fyh_actualizacion=:fyh_actualizacion
                            WHERE id_persona=:id_persona');

$sentencia->bindParam(':nombres', $nombres);
$sentencia->bindParam(':apellidos', $apellidos);
$sentencia->bindParam(':documento_identidad', $documento_identidad);
$sentencia->bindParam(':fecha_nacimiento', $fecha_nacimiento);
$sentencia->bindParam(':celular', $celular);
$sentencia->bindParam(':profesion', $profesion);
$sentencia->bindParam(':direccion', $direccion);
$sentencia->bindParam(':fyh_actualizacion', $fechaHora);
$sentencia->bindParam(':id_persona', $id_persona);
$sentencia->execute();


//Insertar a la tabla administrativos
$sentencia = $pdo->prepare('UPDATE administrativos
                            SET fyh_actualizacion=:fyh_actualizacion
                            WHERE id_administrativo=:id_administrativo');

$sentencia->bindParam(':fyh_actualizacion', $fechaHora);
$sentencia->bindParam(':id_administrativo', $id_administrativo);

if ($sentencia->execute()) {
    echo 'success';
    $pdo->commit();
    session_start();
    $_SESSION['mensaje'] = 'Se registró el personal administrativo correctamente';
    $_SESSION['icono'] = 'success';
    header('Location:' . APP_URL . '/admin/administrativos');
} else {
    echo 'error al registrar en la base de datos';
    $pdo->rollBack();
    session_start();
    $_SESSION['mensaje'] = 'No se pudo registrar el personal administrativo';
    $_SESSION['icono'] = 'error';
    header('Location:' . APP_URL . '/admin/admninistrativos');
}

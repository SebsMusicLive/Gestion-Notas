<?php

include '../../../app/config.php';

$rol_id = $_POST['rol_id'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$documento_identidad = $_POST['documento_identidad'];
$email = $_POST['email'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$celular = $_POST['celular'];
$profesion = $_POST['profesion'];
$direccion = $_POST['direccion'];
$especialidad = $_POST['especialidad'];
$antiguedad = $_POST['antiguedad'];

$pdo->beginTransaction();

//Insertar a la tabla usuarios
$password = password_hash($documento_identidad, PASSWORD_DEFAULT) . "\n";
$sentencia = $pdo->prepare("INSERT INTO usuarios
                            (rol_id,email,password, fyh_creacion, estado)
                            VALUES (:rol_id,:email,:password,:fyh_creacion,:estado)");

$sentencia->bindParam(':rol_id', $rol_id);
$sentencia->bindParam(':email', $email);
$sentencia->bindParam(':password', $password);
$sentencia->bindParam('fyh_creacion', $fechaHora);
$sentencia->bindParam('estado', $estado_de_registro);
$sentencia->execute();

//Recuperar el id_usuario anterior
$id_usuario = $pdo->lastInsertId();

//Insertar a la tabla personas
$sentencia = $pdo->prepare('INSERT INTO personas
                            (usuario_id,nombres,apellidos,documento_identidad,fecha_nacimiento,celular,profesion,direccion,fyh_creacion,estado)
                            VALUES (:usuario_id,:nombres,:apellidos,:documento_identidad,:fecha_nacimiento,:celular,:profesion,:direccion,:fyh_creacion,:estado)');

$sentencia->bindParam(':usuario_id', $id_usuario);
$sentencia->bindParam(':nombres', $nombres);
$sentencia->bindParam(':apellidos', $apellidos);
$sentencia->bindParam(':documento_identidad', $documento_identidad);
$sentencia->bindParam(':fecha_nacimiento', $fecha_nacimiento);
$sentencia->bindParam(':celular', $celular);
$sentencia->bindParam(':profesion', $profesion);
$sentencia->bindParam(':direccion', $direccion);
$sentencia->bindParam(':fyh_creacion', $fechaHora);
$sentencia->bindParam(':estado', $estado_de_registro);
$sentencia->execute();

//Recuperar id_persona
$id_persona = $pdo->lastInsertId();

//Insertar a la tabla administrativos
$sentencia = $pdo->prepare('INSERT INTO docentes
                            (persona_id,especialidad,antiguedad,fyh_creacion,estado)
                            VALUES (:persona_id,:especialidad,:antiguedad,:fyh_creacion,:estado)');

$sentencia->bindParam(':persona_id', $id_persona);
$sentencia->bindParam(':especialidad', $especialidad);
$sentencia->bindParam(':antiguedad', $antiguedad);
$sentencia->bindParam(':fyh_creacion', $fechaHora);
$sentencia->bindParam(':estado', $estado_de_registro);

if ($sentencia->execute()) {
    echo 'success';
    $pdo->commit();
    session_start();
    $_SESSION['mensaje'] = 'Se registró el personal docente correctamente';
    $_SESSION['icono'] = 'success';
    header('Location:' . APP_URL . '/admin/docentes');
} else {
    echo 'error al registrar en la base de datos';
    $pdo->rollBack();
    session_start();
    $_SESSION['mensaje'] = 'No se pudo registrar el personal docente';
    $_SESSION['icono'] = 'error';
    header('Location:' . APP_URL . '/admin/docentes');
}

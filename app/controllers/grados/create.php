<?php

include('../../../app/config.php');

$gestion_id = $_POST['gestion_id'];
$grado = $_POST['grado'];
$jornada = $_POST['jornada'];

$sentencia = $pdo->prepare('INSERT INTO grados (gestion_id,grado,jornada,fyh_creacion,estado)
VALUES (:gestion_id,:grado,:jornada,:fyh_creacion,:estado)');

$sentencia->bindParam(':gestion_id', $gestion_id);
$sentencia->bindParam(':grado', $grado);
$sentencia->bindParam(':jornada', $jornada);
$sentencia->bindParam('fyh_creacion', $fechaHora);
$sentencia->bindParam('estado', $estado_de_registro);


if ($sentencia->execute()) {
    session_start();
    $_SESSION['mensaje'] = 'Se registró el grado correctamente';
    $_SESSION['icono'] = 'success';
    header('Location:' . APP_URL . '/admin/grados');
} else {
    session_start();
    $_SESSION['mensaje'] = 'Ocurrió un error al registrar el grado';
    $_SESSION['icono'] = 'error';
?><script>
        window.history.back();
</script><?php
}
?>
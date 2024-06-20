<?php

include('../../../app/config.php');

$gestion_id = $_POST['gestion_id'];
$nivel = $_POST['nivel'];
$jornada = $_POST['jornada'];

$sentencia = $pdo->prepare('INSERT INTO niveles (gestion_id,nivel,jornada,fyh_creacion,estado)
VALUES (:gestion_id,:nivel,:jornada,:fyh_creacion,:estado)');

$sentencia->bindParam(':gestion_id', $gestion_id);
$sentencia->bindParam(':nivel', $nivel);
$sentencia->bindParam(':jornada', $jornada);
$sentencia->bindParam('fyh_creacion', $fechaHora);
$sentencia->bindParam('estado', $estado_de_registro);


if ($sentencia->execute()) {
    session_start();
    $_SESSION['mensaje'] = 'Se registró el nivel correctamente';
    $_SESSION['icono'] = 'success';
    header('Location:' . APP_URL . 'admin/niveles');
} else {
    session_start();
    $_SESSION['mensaje'] = 'Ocurrió un error al registrar el nivel';
    $_SESSION['icono'] = 'error';
?><script>
        window.history.back();
</script><?php
}
?>
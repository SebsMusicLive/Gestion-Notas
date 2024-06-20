<?php

include('../../../app/config.php');

$id_nivel = $_POST['id_nivel'];
$gestion_id = $_POST['gestion_id'];
$nivel = $_POST['nivel'];
$jornada = $_POST['jornada'];

$sentencia = $pdo->prepare('UPDATE niveles 
SET gestion_id=:gestion_id,
    nivel=:nivel,
    jornada=:jornada,
    fyh_actualizacion=:fyh_actualizacion
WHERE id_nivel=:id_nivel');

$sentencia->bindParam(':gestion_id', $gestion_id);
$sentencia->bindParam(':nivel', $nivel);
$sentencia->bindParam(':jornada', $jornada);
$sentencia->bindParam('fyh_actualizacion', $fechaHora);
$sentencia->bindParam('id_nivel', $id_nivel);


if ($sentencia->execute()) {
    session_start();
    $_SESSION['mensaje'] = 'Se actualizó el nivel correctamente';
    $_SESSION['icono'] = 'success';
    header('Location:' . APP_URL . '/admin/niveles');
} else {
    session_start();
    $_SESSION['mensaje'] = 'Ocurrió un error al actualizar el nivel';
    $_SESSION['icono'] = 'error';
?><script>
        window.history.back();
</script><?php
}
?>
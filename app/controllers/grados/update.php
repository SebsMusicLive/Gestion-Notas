<?php

include('../../../app/config.php');

$id_grado = $_POST['id_grado'];
$gestion_id = $_POST['gestion_id'];
$grado = $_POST['grado'];
$jornada = $_POST['jornada'];

$sentencia = $pdo->prepare('UPDATE grados 
SET gestion_id=:gestion_id,
    grado=:grado,
    jornada=:jornada,
    fyh_actualizacion=:fyh_actualizacion
WHERE id_grado=:id_grado');

$sentencia->bindParam(':gestion_id', $gestion_id);
$sentencia->bindParam(':grado', $grado);
$sentencia->bindParam(':jornada', $jornada);
$sentencia->bindParam('fyh_actualizacion', $fechaHora);
$sentencia->bindParam('id_grado', $id_grado);


if ($sentencia->execute()) {
    session_start();
    $_SESSION['mensaje'] = 'Se actualizó el grado correctamente';
    $_SESSION['icono'] = 'success';
    header('Location:' . APP_URL . '/admin/grados');
} else {
    session_start();
    $_SESSION['mensaje'] = 'Ocurrió un error al actualizar el grado';
    $_SESSION['icono'] = 'error';
?><script>
        window.history.back();
</script><?php
}
?>
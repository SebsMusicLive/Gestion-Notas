<?php

include '../../../app/config.php';

$id_materia = $_POST['id_materia'];
$materia = $_POST['materia'];

$sentencia = $pdo -> prepare('UPDATE materias 
                            SET materia=:materia,
                            fyh_creacion=:fyh_creacion
                            WHERE id_materia=:id_materia');
$sentencia->bindParam(':materia', $materia);
$sentencia->bindParam(':fyh_creacion', $fechaHora);
$sentencia->bindParam(':id_materia', $id_materia);

if ($sentencia->execute()) {
    session_start();
    $_SESSION['mensaje'] = 'Se actualizó la materia correctamente';
    $_SESSION['icono'] = 'success';
    header('Location:' . APP_URL . 'admin/materias');
} else {
    session_start();
    $_SESSION['mensaje'] = 'Ocurrió un error al actualizar la materia';
    $_SESSION['icono'] = 'error';
?><script>
        window.history.back();
</script><?php
}
?>

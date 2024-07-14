<?php
include '../../../app/config.php';

$id_materia = $_POST['id_materia'];

$sentencia = $pdo->prepare("DELETE FROM materias WHERE id_materia = :id_materia");
$sentencia->bindParam('id_materia', $id_materia);

if ($sentencia->execute()) {
    session_start();
    $_SESSION['mensaje'] = 'Se eliminó el materia correctamente';
    $_SESSION['icono'] = 'success';
    header('Location:' . APP_URL . '/admin/materias');
} else {
    session_start();
    $_SESSION['mensaje'] = 'Ocurrió un error al eliminar el materia';
    $_SESSION['icono'] = 'error';
    header('Location:' . APP_URL . '/admin/materias');
}


?>
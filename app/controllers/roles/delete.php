<?php
include ('../../../app/config.php');

$id_rol = $_POST['id_rol'];

$sentencia = $pdo->prepare("DELETE FROM roles WHERE id_rol = :id_rol");
$sentencia->bindParam('id_rol', $id_rol);

if ($sentencia->execute()) {
    session_start();
    $_SESSION['mensaje'] = 'Se eliminó el rol correctamente';
    $_SESSION['icono'] = 'success';
    header('Location:' . APP_URL . '/admin/roles');
} else {
    session_start();
    $_SESSION['mensaje'] = 'Ocurrió un error al eliminar el rol';
    $_SESSION['icono'] = 'error';
    header('Location:' . APP_URL . '/admin/roles');
}


?>
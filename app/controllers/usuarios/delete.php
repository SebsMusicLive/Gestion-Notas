<?php
include ('../../../app/config.php');

$id_usuario = $_POST['id_usuario'];

$sentencia = $pdo->prepare("DELETE FROM usuarios WHERE id_usuario = :id_usuario");
$sentencia->bindParam('id_usuario', $id_usuario);

if ($sentencia->execute()) {
    session_start();
    $_SESSION['mensaje'] = 'Se eliminó el usuario correctamente';
    $_SESSION['icono'] = 'success';
    header('Location:' . APP_URL . '/admin/usuarios');
} else {
    session_start();
    $_SESSION['mensaje'] = 'Ocurrió un error al eliminar el usuario';
    $_SESSION['icono'] = 'error';
    header('Location:' . APP_URL . '/admin/usuarios');
}


?>
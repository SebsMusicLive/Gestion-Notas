<?php
include ('../../../../app/config.php');

$id_config_institucion = $_POST['id_config_institucion'];

$sentencia = $pdo->prepare("DELETE FROM configuracion_instituciones WHERE id_config_institucion = :id_config_institucion");
$sentencia->bindParam('id_config_institucion', $id_config_institucion);

if ($sentencia->execute()) {
    session_start();
    $_SESSION['mensaje'] = 'Se eliminó el usuario correctamente';
    $_SESSION['icono'] = 'success';
    header('Location:' . APP_URL . '/admin/configuraciones/institucion');
} else {
    session_start();
    $_SESSION['mensaje'] = 'Ocurrió un error al eliminar el usuario';
    $_SESSION['icono'] = 'error';
    ?><script>window.history.back();</script><?php
}


?>
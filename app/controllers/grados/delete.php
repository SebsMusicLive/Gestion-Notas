<?php
include ('../../../app/config.php');

$id_grado = $_POST['id_grado'];

$sentencia = $pdo->prepare("DELETE FROM grados WHERE id_grado = :id_grado");
$sentencia->bindParam('id_grado', $id_grado);

if ($sentencia->execute()) {
    session_start();
    $_SESSION['mensaje'] = 'Se eliminó el grado correctamente';
    $_SESSION['icono'] = 'success';
    header('Location:' . APP_URL . '/admin/grados');
} else {
    session_start();
    $_SESSION['mensaje'] = 'Ocurrió un error al eliminar el grado';
    $_SESSION['icono'] = 'error';
    ?><script>window.history.back();</script><?php
}


?>
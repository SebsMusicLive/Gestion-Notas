<?php

include '../../../app/config.php';

$id_grado = $_POST['id_grado'];
$nivel_id = $_POST['nivel_id'];
$curso = $_POST['curso'];
$grupo = $_POST['grupo'];

$sentencia = $pdo -> prepare('UPDATE grados 
                              SET nivel_id =:nivel_id, 
                              curso =:curso, 
                              grupo =:grupo, 
                              fyh_actualizacion =:fyh_actualizacion
                              WHERE id_grado =:id_grado');
$sentencia->bindParam(':nivel_id', $nivel_id);
$sentencia->bindParam(':curso', $curso);
$sentencia->bindParam(':grupo', $grupo);
$sentencia->bindParam('fyh_actualizacion', $fechaHora);
$sentencia->bindParam('id_grado', $id_grado);

if ($sentencia->execute()) {
    session_start();
    $_SESSION['mensaje'] = 'Se actualizó el grado correctamente';
    $_SESSION['icono'] = 'success';
    header('Location:' . APP_URL . 'admin/grados');
} else {
    session_start();
    $_SESSION['mensaje'] = 'Ocurrió un error al actualizar el grado';
    $_SESSION['icono'] = 'error';
?><script>
        window.history.back();
</script><?php
}
?>

?>
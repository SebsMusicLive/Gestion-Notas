<?php

include('../../../app/config.php');

$nivel_id = $_POST['nivel_id'];
$curso = $_POST['curso'];
$grupo = $_POST['grupo'];

$sentencia = $pdo -> prepare('INSERT INTO grados (nivel_id, curso, grupo, fyh_creacion, estado)
                                        VALUES (:nivel_id,:curso,:grupo,:fyh_creacion,:estado)');
$sentencia->bindParam(':nivel_id', $nivel_id);
$sentencia->bindParam(':curso', $curso);
$sentencia->bindParam(':grupo', $grupo);
$sentencia->bindParam(':fyh_creacion', $fechaHora);
$sentencia->bindParam(':estado', $estado_de_registro);

if ($sentencia->execute()) {
    session_start();
    $_SESSION['mensaje'] = 'Se registró el grado correctamente';
    $_SESSION['icono'] = 'success';
    header('Location:' . APP_URL . 'admin/grados');
} else {
    session_start();
    $_SESSION['mensaje'] = 'Ocurrió un error al registrar el grado';
    $_SESSION['icono'] = 'error';
?><script>
        window.history.back();
</script><?php
}
?>


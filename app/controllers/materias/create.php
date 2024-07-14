<?php

include '../../../app/config.php';

$materia = $_POST['materia'];

$sentencia = $pdo -> prepare('INSERT INTO materias (materia,fyh_creacion, estado)
                                        VALUES (:materia,:fyh_creacion,:estado)');
$sentencia->bindParam(':materia', $materia);
$sentencia->bindParam(':fyh_creacion', $fechaHora);
$sentencia->bindParam(':estado', $estado_de_registro);

if ($sentencia->execute()) {
    session_start();
    $_SESSION['mensaje'] = 'Se registró la materia correctamente';
    $_SESSION['icono'] = 'success';
    header('Location:' . APP_URL . 'admin/materias');
} else {
    session_start();
    $_SESSION['mensaje'] = 'Ocurrió un error al registrar la materia';
    $_SESSION['icono'] = 'error';
?><script>
        window.history.back();
</script><?php
}
?>

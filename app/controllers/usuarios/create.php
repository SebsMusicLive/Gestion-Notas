<?php

include ('../../../app/config.php');

$nombres = $_POST['nombres'];
$rol_id = $_POST['rol_id'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_repeat = $_POST['password_repeat'];

if ($password == $password_repeat) {
    //echo 'Las contraseñas son iguales';
    $password = password_hash($password, PASSWORD_DEFAULT) . "\n";
    $sentencia = $pdo->prepare("INSERT INTO usuarios
(nombres,rol_id,email,password, fyh_creacion, estado)
VALUES ( :nombres,:rol_id,:email,:password,:fyh_creacion,:estado)");

    $sentencia->bindParam(':nombres', $nombres);
    $sentencia->bindParam(':rol_id', $rol_id);
    $sentencia->bindParam(':email', $email);
    $sentencia->bindParam(':password', $password);
    $sentencia->bindParam('fyh_creacion', $fechaHora);
    $sentencia->bindParam('estado', $estado_de_registro);

    try {
        if ($sentencia->execute()) {
            //echo 'success';
            //header('Location:' .$URL.'/');
            session_start();
            $_SESSION['mensaje'] = 'Se registró el usuario correctamente';
            $_SESSION['icono'] = 'success';
            header('Location:' . APP_URL . '/admin/usuarios');
        } else {
            //echo 'error al registrar a la base de datos';
            session_start();
            $_SESSION['mensaje'] = 'Ocurrió un error al registrar el usuario';
            $_SESSION['icono'] = 'error';
            ?>
            <script>window.history.back();</script>
            <?php
        }
    } catch (Exception $e) {
        session_start();
        $_SESSION['mensaje'] = 'El email de este usuario ya existe en el sistema';
        $_SESSION['icono'] = 'error';
        ?>
        <script>window.history.back();</script>
        <?php
    }
} else {
    session_start();
    $_SESSION['mensaje'] = 'Las contraseñas introducidas no son iguales';
    $_SESSION['icono'] = 'error';
    ?>
    <script>window.history.back();</script>
    <?php
}


?>
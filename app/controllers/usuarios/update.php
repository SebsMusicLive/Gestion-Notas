<?php

include ('../../../app/config.php');

$id_usuario = $_POST['id_usuario'];
$nombres = $_POST['nombres'];
$rol_id = $_POST['rol_id'];
$email = $_POST['email'];

$password = $_POST['password'];
$password_repeat = $_POST['password_repeat'];

if($password == ''){
        $sentencia = $pdo->prepare("UPDATE usuarios 
        SET nombres = :nombres,
            rol_id = :rol_id,
            email = :email,
            fyh_actualizacion = :fyh_actualizacion
        WHERE id_usuario = :id_usuario");
    
        $sentencia->bindParam(':nombres', $nombres);
        $sentencia->bindParam(':rol_id', $rol_id);
        $sentencia->bindParam(':email', $email);
        $sentencia->bindParam('fyh_actualizacion', $fechaHora);
        $sentencia->bindParam('id_usuario', $id_usuario);
    
        try {
            if ($sentencia->execute()) {
                //echo 'success';
                //header('Location:' .$URL.'/');
                session_start();
                $_SESSION['mensaje'] = 'Se actualizó el usuario correctamente';
                $_SESSION['icono'] = 'success';
                header('Location:' . APP_URL . '/admin/usuarios');
            } else {
                //echo 'error al registrar a la base de datos';
                session_start();
                $_SESSION['mensaje'] = 'Ocurrió un error al actualizar el usuario';
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
}else{
    if ($password == $password_repeat) {
        //echo 'Las contraseñas son iguales';
        $password = password_hash($password, PASSWORD_DEFAULT) . "\n";
        $sentencia = $pdo->prepare("UPDATE usuarios 
        SET nombres = :nombres,
            rol_id = :rol_id,
            email = :email,
            password = :password,
            fyh_actualizacion = :fyh_actualizacion
        WHERE id_usuario = :id_usuario");
    
        $sentencia->bindParam(':nombres', $nombres);
        $sentencia->bindParam(':rol_id', $rol_id);
        $sentencia->bindParam(':email', $email);
        $sentencia->bindParam(':password', $password);
        $sentencia->bindParam('fyh_actualizacion', $fechaHora);
        $sentencia->bindParam('id_usuario', $id_usuario);
    
        try {
            if ($sentencia->execute()) {
                //echo 'success';
                //header('Location:' .$URL.'/');
                session_start();
                $_SESSION['mensaje'] = 'Se actualizó el usuario correctamente';
                $_SESSION['icono'] = 'success';
                header('Location:' . APP_URL . '/admin/usuarios');
            } else {
                //echo 'error al registrar a la base de datos';
                session_start();
                $_SESSION['mensaje'] = 'Ocurrió un error al actualizar el usuario';
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
}




?>
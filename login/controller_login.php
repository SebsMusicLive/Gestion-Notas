<?php
include('../app/config.php');

$email = $_POST['email'];
$password = $_POST['password'];

$sql="SELECT * FROM usuarios WHERE email = '$email'";
$query = $pdo->prepare($sql);
$query -> execute();

$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
//print_r($usuarios);

$contador = 0;
foreach($usuarios as $usuario){
    $password_tabla = $usuario['password'];
    $contador=$contador+1;
}


if(($contador > 0) && (password_verify($password, $password_tabla))){
    echo 'Los datos son correctos';
    session_start();
    $_SESSION['mensaje'] = 'Bienvenido al sistema';
    $_SESSION['icono'] = 'success';
    $_SESSION['sesion_email'] = $email;
    header('Location:'.APP_URL.'/admin');
}else{
    echo 'Los datos son incorrectos';
    session_start();
    $_SESSION['mensaje'] = 'Los datos introducidos son incorrectos, vuelve a intentarlo';
    header('Location:'.APP_URL.'/login');
}

?>

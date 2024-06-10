<?php
//password 1-5 encriptada prueba = $2y$10$zSJ99LWaKh32rsWib9z9suDd1yFQBDvyNRaq.XMVkl7x9Szk/mdyi;
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

$password_correct = password_verify($password, $password_tabla);
if(($contador > 0) && ($password_correct)){
    echo 'Los datos son correctos';
    session_start();
    $_SESSION['mensaje'] = 'Bienvenido al sistema';
    $_SESSION['icono'] = 'success';
    $_SESSION['sesion_email'] = $email;
    header('Location:'.APP_URL.'/admin');
}else{
    //echo 'Los datos son incorrectos';
    session_start();
    $_SESSION['mensaje'] = 'Los datos introducidos son incorrectos, vuelve a intentarlo';
    //echo var_export($password_correct);
    header('Location:'.APP_URL.'/login');

}

?>

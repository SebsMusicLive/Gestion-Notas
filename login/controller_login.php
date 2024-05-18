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
    header('Location:'.APP_URL.'/admin');
}else{
    echo 'Los datos son incorrectos';
    header('Location:'.APP_URL.'/login');
}

?>

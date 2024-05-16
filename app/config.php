<?php

define('SERVIDOR','localhost');
define('USUARIO','root');
define('PASSWORD','');
define('BD','sistemagestionescolar');

define('APP_NAME','SISTEMA DE GESION ESCOLAR');
define('APP_URL','http://localhost/SistemaGestionEscolar/');
define('KEY_API_MAPS','');

$servidor = "mysql:dbname=".BD.";host=".SERVIDOR;

try{
    $pdo = new PDO($servidor, USUARIO, PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    //echo "conexión exitosa a la base de datos";
}catch(PDOException $e) {
    print_r($e);
    echo "conexión erronea a la base de datos";
}

date_default_timezone_set('America/Bogota');
$fechaHora = date('Y-m-d H:m:s');

$fechaActual = date('Y-m-d');
$diaActual = date('d');
$mesActual = date('m');
$anoActual = date('Y');

?>
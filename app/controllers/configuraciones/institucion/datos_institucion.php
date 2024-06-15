<?php

$sql_institucion = "SELECT * FROM configuracion_instituciones WHERE id_config_institucion = '$id_config_institucion' AND estado = '1'";
$query_institucion = $pdo -> prepare($sql_institucion);
$query_institucion->execute();
$instituciones = $query_institucion -> fetchAll(PDO::FETCH_ASSOC);

foreach($instituciones as $institucion){
    $nombre_institucion = $institucion['nombre_institucion'];
    $direccion = $institucion['direccion'];
    $telefono = $institucion['telefono'];
    $celular = $institucion['celular'];
    $correo = $institucion['correo'];
    $logo = $institucion['logo'];
}

?>
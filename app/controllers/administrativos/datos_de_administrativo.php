<?php

$sql_administrativos = "SELECT * FROM usuarios AS usu INNER JOIN roles AS rol ON rol.id_rol = usu.rol_id
                        INNER JOIN personas AS per ON per.usuario_id = usu.id_usuario
                        INNER JOIN administrativos AS adm ON per.id_persona = adm.persona_id
                        WHERE adm.estado = '1' AND adm.id_administrativo = '$id_administrativo'";
$query_administrativos = $pdo->prepare($sql_administrativos);
$query_administrativos->execute();
$administrativos = $query_administrativos->fetchAll(PDO::FETCH_ASSOC);

foreach($administrativos as $administrativo){
    $id_administrativo = $administrativo['id_administrativo'];
    $id_usuario = $administrativo['id_usuario'];
    $id_persona = $administrativo['id_persona'];
    $nombres = $administrativo['nombres'];
    $apellidos = $administrativo['apellidos'];
    $nombre_rol = $administrativo['nombre_rol'];
    $documento_identidad = $administrativo['documento_identidad'];
    $fecha_nacimiento = $administrativo['fecha_nacimiento'];
    $celular = $administrativo['celular'];
    $profesion = $administrativo['profesion'];
    $email = $administrativo['email'];
    $direccion = $administrativo['direccion'];
    $fyh_creacion = $administrativo['fyh_creacion'];
    $estado = $administrativo['estado'];
}

?>
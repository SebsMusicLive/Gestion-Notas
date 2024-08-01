<?php


$sql_docentes = "SELECT * FROM usuarios AS usu INNER JOIN roles AS rol ON rol.id_rol = usu.rol_id
                        INNER JOIN personas AS per ON per.usuario_id = usu.id_usuario
                        INNER JOIN docentes AS doc ON per.id_persona = doc.persona_id
                        WHERE doc.estado = '1' AND doc.id_docente = '$id_docente'";
$query_docente = $pdo->prepare($sql_docentes);
$query_docente->execute();
$docentes = $query_docente->fetchAll(PDO::FETCH_ASSOC);

foreach($docentes as $docente){
    $id_docente = $docente['id_docente'];
    $id_usuario = $docente['id_usuario'];
    $id_persona = $docente['id_persona'];
    $nombres = $docente['nombres'];
    $apellidos = $docente['apellidos'];
    $nombre_rol = $docente['nombre_rol'];
    $documento_identidad = $docente['documento_identidad'];
    $fecha_nacimiento = $docente['fecha_nacimiento'];
    $celular = $docente['celular'];
    $profesion = $docente['profesion'];
    $email = $docente['email'];
    $direccion = $docente['direccion'];
    $especialidad = $docente['especialidad'];
    $antiguedad = $docente['antiguedad'];
    $fyh_creacion = $docente['fyh_creacion'];
    $estado = $docente['estado'];
}

?>
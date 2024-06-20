<?php

$sql_grados = "SELECT * FROM grados AS grad INNER JOIN gestiones AS ges ON grad.gestion_id = ges.id_gestion WHERE grad.estado = '1' AND grad.id_grado = '$id_grado'";
$query_grados = $pdo -> prepare($sql_grados);
$query_grados -> execute();
$datos_grados = $query_grados -> fetchAll(PDO::FETCH_ASSOC);

foreach($datos_grados as $dato_grado){
    $gestion_id = $dato_grado['gestion_id'];
    $gestion = $dato_grado['gestion'];
    $grado = $dato_grado['grado'];
    $jornada = $dato_grado['jornada'];
    $fyh_creacion = $dato_grado['fyh_creacion'];
    $estado = $dato_grado['estado'];
}

?>
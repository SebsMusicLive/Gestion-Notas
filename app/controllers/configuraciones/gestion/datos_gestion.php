<?php

$sql_gestiones = "SELECT * FROM gestiones WHERE id_gestion = '$id_gestion'";
$query_gestiones = $pdo -> prepare($sql_gestiones);
$query_gestiones -> execute();
$datos_gestiones = $query_gestiones -> fetchAll(PDO::FETCH_ASSOC);

foreach($datos_gestiones as $dato_gestion){
    $gestion = $dato_gestion['gestion'];
    $fyh_creacion = $dato_gestion['fyh_creacion'];
    $estado = $dato_gestion['estado'];
}

?>
<?php

$sql_niveles = "SELECT * FROM niveles AS niv INNER JOIN gestiones AS ges ON niv.gestion_id = ges.id_gestion WHERE niv.estado = '1' AND niv.id_nivel = '$id_nivel'";
$query_niveles = $pdo -> prepare($sql_niveles);
$query_niveles -> execute();
$datos_niveles = $query_niveles -> fetchAll(PDO::FETCH_ASSOC);

foreach($datos_niveles as $dato_nivel){
    $gestion_id = $dato_nivel['gestion_id'];
    $gestion = $dato_nivel['gestion'];
    $nivel = $dato_nivel['nivel'];
    $jornada = $dato_nivel['jornada'];
    $fyh_creacion = $dato_nivel['fyh_creacion'];
    $estado = $dato_nivel['estado'];
}

?>
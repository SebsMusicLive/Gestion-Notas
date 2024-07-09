<?php

$sql_grados = "SELECT * FROM grados AS grad INNER JOIN niveles AS niv ON grad.nivel_id = niv.id_nivel 
WHERE grad.estado = '1' AND id_grado = '$id_grado'";
$query_grados = $pdo -> prepare($sql_grados);
$query_grados -> execute();
$grados = $query_grados -> fetchAll(PDO::FETCH_ASSOC);

foreach($grados as $grado) {
    $id_grado = $grado['id_grado'];
    $nivel_id = $grado['nivel_id'];
    $curso = $grado['curso'];
    $grupo = $grado['grupo'];
    $nivel = $grado['nivel'];
    $jornada = $grado['jornada'];
    $fyh_creacion = $grado['fyh_creacion'];
    $estado = $grado['estado'];
}

?>
<?php

$sql_materias = "SELECT * FROM materias WHERE estado = '1' AND id_materia = '$id_materia'";
$query_materias = $pdo -> prepare($sql_materias);
$query_materias -> execute();
$materias = $query_materias -> fetchAll(PDO::FETCH_ASSOC);

foreach($materias as $materiaa ) {
    $materia = $materiaa['materia']; 
    $fyh_creacion = $materiaa['fyh_creacion'];
    $estado = $materiaa['estado'];
}

?>
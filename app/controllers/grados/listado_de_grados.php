<?php

$sql_grados = "SELECT * FROM grados AS grad INNER JOIN niveles AS niv ON grad.nivel_id = niv.id_nivel WHERE grad.estado = '1'";
$query_grados = $pdo -> prepare($sql_grados);
$query_grados -> execute();
$grados = $query_grados -> fetchAll(PDO::FETCH_ASSOC);

?>
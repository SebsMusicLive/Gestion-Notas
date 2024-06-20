<?php

$sql_grados = "SELECT * FROM grados AS grad INNER JOIN gestiones AS ges ON grad.gestion_id = ges.id_gestion WHERE grad.estado = '1'";
$query_grados = $pdo -> prepare($sql_grados);
$query_grados -> execute();
$grados = $query_grados -> fetchAll(PDO::FETCH_ASSOC);

?>
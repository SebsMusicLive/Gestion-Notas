<?php

$sql_instituciones = "SELECT * FROM configuracion_instituciones WHERE estado = '1'";
$query_instituciones = $pdo -> prepare($sql_instituciones);
$query_instituciones -> execute();
$instituciones = $query_instituciones -> fetchAll(PDO::FETCH_ASSOC);

?>
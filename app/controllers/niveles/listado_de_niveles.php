<?php

$sql_niveles = "SELECT * FROM niveles AS niv INNER JOIN gestiones AS ges ON niv.gestion_id = ges.id_gestion WHERE niv.estado = '1'";
$query_niveles = $pdo -> prepare($sql_niveles);
$query_niveles -> execute();
$niveles = $query_niveles -> fetchAll(PDO::FETCH_ASSOC);

?>
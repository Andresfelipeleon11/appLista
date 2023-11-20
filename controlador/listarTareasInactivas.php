<?php
include '../entidad/tareasEntidad.php';
include '../modelo/tareaModelo.php';

$tareaE = new \entidad\tareaEntidad();
$tareaM = new \modelo\tareaModelo($tareaE);

$respuesta = $tareaM->listarTareasInactivas();
echo json_encode($respuesta);

unset($tareaE);
unset($tareaM);



?>
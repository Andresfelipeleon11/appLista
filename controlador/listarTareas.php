<?php


include_once '../entidad/tareasEntidad.php';
include_once '../modelo/tareaModelo.php';


$tareaE = new \entidad\tareaEntidad();
$tareaM = new \modelo\tareaModelo($tareaE);


$respuesta = $tareaM->listarTareas();

echo json_encode($respuesta);

unset($tareaE);
unset($tareaM);
?>
<?php



include '../entidad/tareasEntidad.php';
include '../modelo/tareaModelo.php';

$idTarea = $_POST['id_tareaM'];



$tareaE = new \entidad\tareaEntidad();
$tareaE->setId_tarea($idTarea);

$tareaM = new \modelo\tareaModelo($tareaE);
$respuesta = $tareaM->modificarEstadoTareaInactiva();

echo json_encode($respuesta);

unset($tareaE);
unset($tareaM);
?>
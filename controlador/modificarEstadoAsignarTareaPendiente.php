<?php

include '../entidad/tareasUsuarioEntidad.php';
include '../modelo/tareasUsuarioModelo.php';

$idTarea = $_POST['id_tareaUsuarioM'];
$tareaUsuarioE = new  \entidad\tareasUsuarioE();
$tareaUsuarioE->setId_tarea_usuario($idTarea);

$tareaUsuarioM = new \modelo\tareasUsuarioM($tareaUsuarioE);
$respuesta = $tareaUsuarioM->modificarEstadoAsignarTareaPendiente();

echo json_encode($respuesta);

unset($tareaUsuarioE);
unset($tareaUsuarioM);

?>
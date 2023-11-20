<?php



include '../entidad/tareasUsuarioEntidad.php';
include '../modelo/tareasUsuarioModelo.php';

$tareaId = $_POST['idTareaUsuarioE'];
$tareasUsuarioE = new \entidad\tareasUsuarioE();
$tareasUsuarioE->setId_tarea_usuario($tareaId);

$tareaUsuarioM = new \modelo\tareasUsuarioM($tareasUsuarioE);
$respuesta = $tareaUsuarioM->eliminarTareaAsignada();

echo json_encode($respuesta);

unset($tareasUsuarioE);
unset($tareaUsuarioM);


?>
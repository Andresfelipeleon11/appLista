<?php

include_once "../entidad/tareasUsuarioEntidad.php";
include_once "../modelo/tareasUsuarioModelo.php";

$id_tarea_usuario = $_POST['idTareaUsuarioM'];
$id_tarea = $_POST['selNombreTareaM'];


$id_usuario = $_POST['selUsuarioM'];

    


$tareaUsuarioE = new \entidad\tareasUsuarioE;
$tareaUsuarioE->setId_tarea_usuario($id_tarea_usuario);
$tareaUsuarioE->setId_tarea($id_tarea);
$tareaUsuarioE->setId_usuario($id_usuario);


$tareaUsuarioM = new \modelo\tareasUsuarioM($tareaUsuarioE);
$respuesta=$tareaUsuarioM->modificarAsignarTarea();

echo json_encode($respuesta);

unset($tareaUsuarioE);
unset($tareaUsuarioM);


?>
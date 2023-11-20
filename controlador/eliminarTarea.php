<?php
include '../entidad/tareasEntidad.php';
include '../modelo/tareaModelo.php';


    $id_tarea = $_POST['tarea_idE'];

    $tareaE = new \entidad\tareaEntidad();
    $tareaE->setId_tarea($id_tarea);

    $tareaM = new \modelo\tareaModelo($tareaE);
    $respuesta = $tareaM-> eliminarTarea();

    echo json_encode($respuesta);

    unset($tareaE);
    unset($tareaM);

?>

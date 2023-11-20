<?php
include '../entidad/tareasEntidad.php';

include '../modelo/tareaModelo.php';

$id_tarea = $_POST['id_tareaM'];
$nombre_tarea = $_POST['nombre_tareaM'];
$descripcion_tarea = $_POST['descripcion_tareaM'];
$fecha_creacion = $_POST['fecha_creacionM'];


$tareaE = new \entidad\tareaEntidad();
$tareaE->setId_tarea($id_tarea);
$tareaE->setNombre_tarea($nombre_tarea);
$tareaE->setDescripcion_tarea($descripcion_tarea);
$tareaE->setFecha_creacion($fecha_creacion);

$tareaM = new \modelo\tareaModelo($tareaE);
$respuesta = $tareaM-> modificarTarea();

echo json_encode($respuesta);

unset($tareaE);
unset($tareaM);



?>
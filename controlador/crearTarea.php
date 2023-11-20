<?php

include '../entidad/tareasEntidad.php';
include '../modelo/tareaModelo.php';

$nombre_tarea = $_POST['nombre_tarea'];
$descripcion_tarea = $_POST['descripcion_tarea'];
$fecha_creacion = $_POST['fecha_creacion'];



$tareaE = new \entidad\tareaEntidad();
$tareaE->setNombre_tarea($nombre_tarea);
$tareaE->setDescripcion_tarea($descripcion_tarea);
$tareaE->setFecha_creacion($fecha_creacion);


$tareaM = new \modelo\tareaModelo($tareaE);
$respuesta = $tareaM->crearTarea();

echo json_encode($respuesta);

unset($tareaE);
unset($tareaM);
?>
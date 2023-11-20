<?php
include '../entidad/tareasUsuarioEntidad.php';
include '../modelo/tareasUsuarioModelo.php';

if (isset($_POST['selNombreTarea'])) {
    $id_tarea = $_POST['selNombreTarea'];
} else {
    echo "La clave 'selNombreTarea' no está definida.";
    return;
}

if (isset($_POST['selUsuario'])) {
    $id_usuario = $_POST['selUsuario'];
} else {
    echo "La clave 'selUsuario' no está definida.";
    return;
}

$tareaUsuarioE = new \entidad\tareasUsuarioE();
$tareaUsuarioE->setId_tarea($id_tarea);
$tareaUsuarioE->setId_usuario($id_usuario);

$tareaUsuarioM = new \modelo\tareasUsuarioM($tareaUsuarioE);
$respuesta =  $tareaUsuarioM->asignarTarea();

echo json_encode($respuesta);

unset($tareaUsuarioE);
unset($tareaUsuarioM);
?>

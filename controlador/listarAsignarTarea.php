<?php
session_start();

include '../entidad/tareasUsuarioEntidad.php';
include '../modelo/tareasUsuarioModelo.php';

if(isset($_SESSION['id_usuario'])) {
    $id_usuario = $_SESSION['id_usuario'];

    $tareaUsuarioE = new \entidad\tareasUsuarioE();
    $tareaUsuarioM = new \modelo\tareasUsuarioM($tareaUsuarioE);

    $respuesta = $tareaUsuarioM->listarTareaUsuario($id_usuario);

    echo json_encode($respuesta);

    unset($tareaUsuarioE);
    unset($tareaUsuarioM);

} else {
    echo "La sesión 'id_usuario' no está establecida.";
}
?>

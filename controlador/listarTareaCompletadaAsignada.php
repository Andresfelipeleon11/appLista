<?php
session_start();



include '../entidad/tareasUsuarioEntidad.php';

include '../modelo/tareasUsuarioModelo.php';


if(isset($_SESSION['id_usuario'])){
    $id_usuario = $_SESSION['id_usuario'];
    $tareasUsuarioE = new \entidad\tareasUsuarioE();
    $tareasUsuarioM = new \modelo\tareasUsuarioM($tareasUsuarioE);
    
    $respuesta = $tareasUsuarioM->listarTareasInactivasAsignada($id_usuario);
    echo json_encode($respuesta);
    
    unset($tareasUsuarioE);
    unset($tareasUsuarioM);


}


else{
    echo "La sesión 'id_usuario' no está establecida.";
}







?>
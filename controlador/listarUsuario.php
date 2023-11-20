<?php



include '../entidad/usuarioEntidad.php';

include '../modelo/usuarioModelo.php';


$usuarioE = new \entidad\usuarioEntidad();
$usuarioM = new \modelo\usuarioModelo($usuarioE);

$respuesta = $usuarioM->listarUsuario();

echo json_encode($respuesta);


unset($usuarioE);
unset($usuarioM)


?>
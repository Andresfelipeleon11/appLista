<?php
include '../entidad/usuarioEntidad.php';
include '../modelo/usuarioModelo.php';

$nombre_usuario = $_POST['nombre_usuario'];
$contrasena = $_POST['contrasena'];

$usuarioE = new \entidad\usuarioEntidad();
$usuarioE->setNombre_usuario($nombre_usuario);
$usuarioE->setContrasena($contrasena);

$usuarioM = new \modelo\usuarioModelo($usuarioE);
$respuesta = $usuarioM->crearSesion();

echo json_encode($respuesta);

unset($usuarioE);
unset($usuarioM);

?>
<?php
include '../entidad/usuarioEntidad.php';
include '../modelo/usuarioModelo.php';

$nombre_usuario = $_POST['nombre_usuario'];
$correo_usuario = $_POST['correo_usuario'];
$contrasena_usuario = $_POST['contrasena_usuario'];


$usuarioE = new \entidad\usuarioEntidad();
$usuarioE->setNombre_usuario($nombre_usuario);
$usuarioE->setCorreo($correo_usuario);
$usuarioE->setContrasena($contrasena_usuario);

$usuarioM = new \modelo\usuarioModelo($usuarioE);
$respuesta = $usuarioM->registrarUsuario();

echo json_encode($respuesta);

unset($usuarioE);
unset($usuarioM);



?>
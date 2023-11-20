<?php
session_start();

if(isset($_SESSION['nombre_usuario'])){
   session_unset();
   session_destroy();
   echo "Sesión cerrada";
}
else{
   echo "Sesión no activa";
}
?>

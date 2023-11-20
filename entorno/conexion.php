<?php
class Conexion{
    public $conexion;
    public $mensaje;


    public function __construct()
    {
        $servidor = 'localhost';
        $usuario = 'andresf';
        $contrasena = 'andres3045327500';
        $nombreDB = 'bdAppList';

        try{
            $this->conexion = new PDO('pgsql:host='.$servidor.';dbname='.$nombreDB, $usuario, $contrasena);
            $this->mensaje = 'Conexión exitosa';
        }
        catch(PDOException $e){
            $this->mensaje = 'Error de conexión'.$e->getMessage();
        }

    }

    public function getMessage(){
        return $this->mensaje;
    }
}


?>
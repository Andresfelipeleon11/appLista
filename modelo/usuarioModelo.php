<?php
namespace modelo;
use PDO;
use PDOException;

include '../entorno/conexion.php';

class usuarioModelo{
    private $id_usuario;
    private $nombre_usuario;
    private $correo;
    private $contrasena;
    public $con;


    
    public function __construct(\entidad\usuarioEntidad $usuarioE)
    {
        $this-> id_usuario = $usuarioE->getId_usuario();
        $this-> nombre_usuario = $usuarioE->getNombre_usuario();
        $this-> correo = $usuarioE->getCorreo();
        $this-> contrasena = $usuarioE->getContrasena();
        $this->con = new \Conexion();
        $this->con->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function listarUsuario(){
        try{
            $sql = "SELECT id_usuario,nombre_usuario from usuario;";
            $result = $this->con->conexion->prepare($sql);
            $result->execute();
            $datos = $result-> fetchAll(PDO::FETCH_ASSOC);
            return $datos;
        }
        catch(PDOException $e){
            return 'error'.$e->getMessage();
        }
    }


    public function crearSesion(){
        try{
            $sql = "SELECT * FROM usuario WHERE nombre_usuario=:nombre_usuario AND contrasena=:contrasena";
            $result = $this->con->conexion->prepare($sql);
            $result->bindParam(':nombre_usuario', $this->nombre_usuario);
            $result->bindParam(':contrasena', $this->contrasena);
            $result->execute();
            $resultado = $result->fetchAll(PDO::FETCH_ASSOC);
            if(isset($resultado) && !empty($resultado)){
                session_start();
                $_SESSION['nombre_usuario'] = $resultado[0]['nombre_usuario'];
                $_SESSION['id_usuario'] = $resultado[0]['id_usuario'];
            }
            else{
                $resultado = 0;
            }
            return $resultado;
        }
        catch(PDOException $e){
            return 'Error'.$e;
        }
    }


    public function registrarUsuario(){
        try{
            $sql = "INSERT INTO usuario(nombre_usuario, correo, contrasena) VALUES (:nombre_usuario, :correo, :contrasena)";
            $result= $this->con->conexion->prepare($sql);
            $result->bindParam(':nombre_usuario', $this->nombre_usuario);
            $result->bindParam(':correo', $this->correo);
            $result->bindParam(':contrasena', $this->contrasena);
            $result->execute();
            return 'Usuario registrado con exito';

        }
        catch(PDOException $e){
            return 'Error'.$e;
        }
    }
}

?>
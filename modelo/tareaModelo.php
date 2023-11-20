<?php

namespace modelo;
include '../entorno/conexion.php';


use PDO;
use PDOException;



class tareaModelo{
private $id_tarea;
private $nombre_tarea;
private $descripcion_tarea;
private $fecha_creacion;
private $estado;
public $con;





public function __construct(\entidad\tareaEntidad $tareaE)
{
    $this-> id_tarea = $tareaE->getId_tarea();
    $this->nombre_tarea = $tareaE->getNombre_tarea();
    $this->descripcion_tarea = $tareaE->getDescripcion_tarea();
    $this->fecha_creacion = $tareaE->getFecha_creacion();
    $this->con = new \Conexion();
    $this->con->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}


public function listarTareas(){
    try{
        $sql = "SELECT id_tarea,nombre_tarea,descripcion_tarea, fecha_creacion, estado from tareas WHERE estado = 'activo' ORDER BY id_tarea ASC;";
        $result = $this->con->conexion->prepare($sql);
        $result->execute();
        $datos = $result->fetchAll(PDO::FETCH_ASSOC);
        return $datos;
    }
    catch(PDOException $e){
        return 'Error listar'.$e;
    }
   
}

public function crearTarea(){
    try{
        $sql = "INSERT INTO tareas(nombre_tarea, descripcion_tarea, fecha_creacion, estado)
        VALUES (:nombre_tarea, :descripcion_tarea, :fecha_creacion, 'activo')";
        $result = $this->con->conexion->prepare($sql);
        $result->bindParam(':nombre_tarea', $this->nombre_tarea);
        $result->bindParam(':descripcion_tarea', $this->descripcion_tarea);
        $result->bindParam(':fecha_creacion', $this->fecha_creacion);
        $result->execute();
        return 'Tarea creada con exito';
    }
    catch(PDOException $e){
        return 'Error al crear tarea'.$e;
    }
}

public function modificarTarea(){
    try{
        $sql = "UPDATE tareas SET nombre_tarea=:nombre_tarea, descripcion_tarea=:descripcion_tarea, fecha_creacion=:fecha_creacion WHERE id_tarea=:id_tarea";
        $result = $this->con->conexion->prepare($sql);
        $result->bindParam(':id_tarea', $this->id_tarea);
        $result->bindParam(':nombre_tarea', $this->nombre_tarea);
        $result->bindParam(':descripcion_tarea', $this->descripcion_tarea);
        $result->bindParam(':fecha_creacion', $this->fecha_creacion);

        $result->execute();

        return "Tarea modificada con Exito";
    }
    catch(PDOException $e){
        return 'Error al modificar: ' . $e->getMessage();
    }
}


    function eliminarTarea()
    
    {
            $sql = "UPDATE tareas SET estado='inactivo' WHERE id_tarea=:id_tarea";
            $result = $this->con->conexion->prepare($sql);
            $result->bindParam(':id_tarea', $this->id_tarea);
            $result->execute();
            return 'Tarea eliminada con exito';
            
    }

    

    function listarTareasInactivas(){
        try{
            $sql = "SELECT id_tarea, nombre_tarea, descripcion_tarea, fecha_creacion, estado FROM tareas where estado = 'inactivo' ORDER BY id_tarea ASC;";
            $result = $this->con->conexion->prepare($sql);
            $result->execute();
            $datos = $result->fetchAll(PDO::FETCH_ASSOC);
            return $datos;
        }
        catch(PDOException $e){
        return 'Error'.$e->getMessage();
        }
    }

    function modificarEstadoTareaInactiva(){
        try{
            $sql = "UPDATE tareas SET estado='activo' WHERE id_tarea=:id_tarea";
            $result = $this->con->conexion->prepare($sql);
            $result->bindParam(':id_tarea', $this->id_tarea);
            $result->execute();
            return 'Tarea activada con exito';
        }

        catch(PDOException $e){
            return 'Error'.$e->getMessage();
        }
    }
}

?>
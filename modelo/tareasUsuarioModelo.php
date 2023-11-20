<?php

namespace modelo;


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../entorno/conexion.php';

use PDO;
use PDOException;

class tareasUsuarioM
{
    private $id_tarea_usuario;
    private $id_tarea;
    private $id_usuario;
    private $estado_tarea;
    public $con;



    public function __construct(\entidad\tareasUsuarioE $tareasUsuarioE)
    {
        $this->id_tarea_usuario = $tareasUsuarioE->getId_tarea_usuario();
        $this->id_tarea = $tareasUsuarioE->getId_tarea();
        $this->id_usuario = $tareasUsuarioE->getId_usuario();
        $this->estado_tarea = $tareasUsuarioE->getEstado_tarea();
        $this->con = new \Conexion();
        $this->con->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }



    public function listarTareaUsuario($id_usuario)
    {
        try {
            $sql = "SELECT tar.id_tarea, tar.nombre_tarea, tar.descripcion_tarea, tareaU.estado_tarea, tareaU.id_usuario, tar.estado, tareaU.id_tarea_usuario, us.nombre_usuario
    
            FROM vista_tareas_usuarios AS tareaU
    
            INNER JOIN tareas AS tar
    
            ON tareaU.id_tarea = tar.id_tarea   
    
            INNER JOIN usuario AS us
    
            ON tareaU.id_usuario = us.id_usuario WHERE tar.estado = 'activo' AND tareaU.estado_tarea = 'pendiente' AND tareaU.id_usuario = :id_usuario ORDER BY id_tarea_usuario DESC";
    
            $result = $this->con->conexion->prepare($sql);
            $result->bindParam(':id_usuario', $id_usuario, PDO::PARAM_INT);
            $result->execute();
            $datos = $result->fetchAll(PDO::FETCH_ASSOC);
            return $datos;
        } catch (PDOException $e) {
            return 'Error listar' . $e;
        }
    }
    

    public function asignarTarea()
    {
        try {
            $sql = "INSERT INTO tareas_usuarios(id_tarea, id_usuario, estado_tarea) VALUES (:id_tarea, :id_usuario,'pendiente')";
            $result = $this->con->conexion->prepare($sql);
            $result->bindParam(':id_tarea', $this->id_tarea);
            $result->bindParam(':id_usuario', $this->id_usuario);
            $result->execute();
            return "Tarea asignada con exito";
        } catch (PDOException $e) {
            return 'Error al asignar la tarea' . $e->getMessage();
        }
    }


    public function modificarAsignarTarea()
    {
        try {
            $sql = "UPDATE tareas_usuarios SET id_tarea = :id_tarea, id_usuario =:id_usuario WHERE id_tarea_usuario=:id_tarea_usuario";
            $result = $this->con->conexion->prepare($sql);
            $result->bindParam(':id_tarea_usuario', $this->id_tarea_usuario);
            $result->bindParam(':id_tarea', $this->id_tarea);
            $result->bindParam(':id_usuario', $this->id_usuario);
            $result->execute();
            return 'Tarea asignada modificada con exito';
        } catch (PDOException $e) {
            return 'Error al modificar la asiganción de la tarea' . $e->getMessage();
        }
    }

    function eliminarTareaAsignada()
    {
        try {
            $sql = "UPDATE tareas_usuarios SET estado_tarea='completada' WHERE id_tarea_usuario=:id_tarea_usuario";
            $result = $this->con->conexion->prepare($sql);
            $result->bindParam(':id_tarea_usuario', $this->id_tarea_usuario);
            $result->execute();
            return 'Tarea eliminada con exito';
        } catch (PDOException $e) {
            return 'Error al eliminar la tarea' . $e->getMessage();
        }
    }


    function listarTareasInactivasAsignada($id_usuario)
    {
        try {
           
            $sql = "SELECT tar.id_tarea, tar.nombre_tarea, tar.descripcion_tarea, tareaU.estado_tarea, tareaU.id_usuario, tar.estado, tareaU.id_tarea_usuario, us.nombre_usuario
    
            FROM vista_tareas_usuarios AS tareaU
    
            INNER JOIN tareas AS tar
    
            ON tareaU.id_tarea = tar.id_tarea   
    
            INNER JOIN usuario AS us
    
            ON tareaU.id_usuario = us.id_usuario WHERE tar.estado = tar.estado AND tareaU.estado_tarea = 'completada' AND tareaU.id_usuario = :id_usuario ORDER BY id_tarea_usuario DESC";
          
            $result = $this->con->conexion->prepare($sql);
            $result->bindParam(':id_usuario', $id_usuario, PDO::PARAM_INT);
            $result->execute();
            $datos = $result->fetchAll(PDO::FETCH_ASSOC);
            return $datos;
        } catch (PDOException $e) {
            return 'Error al listar tareas asignadas completadas' . $e->getMessage();
        }
    }

    function modificarEstadoAsignarTareaPendiente()
    {
        try {
            $sql = "UPDATE tareas_usuarios SET estado_tarea='pendiente' WHERE id_tarea_usuario=:id_tarea_usuario";
            $result = $this->con->conexion->prepare($sql);
            $result->bindParam(':id_tarea_usuario', $this->id_tarea_usuario);
            $result->execute();
            return 'Estado de tarea asignada modificado con exito';
        } catch (PDOException $e) {
            return 'Error al modificar el estado a pendiente' . $e->getMessage();
        }
    }
}

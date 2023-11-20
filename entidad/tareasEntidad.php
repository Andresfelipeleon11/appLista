<?php

namespace entidad;


class tareaEntidad{
    private $id_tarea;
    private $nombre_tarea;
    private $descripcion_tarea;
    private $fecha_creacion;
    private $estado;



    /**
     * Get the value of id_tarea
     */ 
    public function getId_tarea()
    {
        return $this->id_tarea;
    }

    /**
     * Set the value of id_tarea
     *
     * @return  self
     */ 
    public function setId_tarea($id_tarea)
    {
        $this->id_tarea = $id_tarea;

        return $this;
    }

    /**
     * Get the value of nombre_tarea
     */ 
    public function getNombre_tarea()
    {
        return $this->nombre_tarea;
    }

    /**
     * Set the value of nombre_tarea
     *
     * @return  self
     */ 
    public function setNombre_tarea($nombre_tarea)
    {
        $this->nombre_tarea = $nombre_tarea;

        return $this;
    }

    /**
     * Get the value of descripcion_tarea
     */ 
    public function getDescripcion_tarea()
    {
        return $this->descripcion_tarea;
    }

    /**
     * Set the value of descripcion_tarea
     *
     * @return  self
     */ 
    public function setDescripcion_tarea($descripcion_tarea)
    {
        $this->descripcion_tarea = $descripcion_tarea;

        return $this;
    }

    /**
     * Get the value of fecha_creacion
     */ 
    public function getFecha_creacion()
    {
        return $this->fecha_creacion;
    }

    /**
     * Set the value of fecha_creacion
     *
     * @return  self
     */ 
    public function setFecha_creacion($fecha_creacion)
    {
        $this->fecha_creacion = $fecha_creacion;

        return $this;
    }

    /**
     * Get the value of estado
     */ 
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     *
     * @return  self
     */ 
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }
}


?>
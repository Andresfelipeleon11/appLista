<?php

namespace entidad;


class tareasUsuarioE{
    private $id_tarea_usuario;
    private $id_tarea;
    private $id_usuario;
    private $estado_tarea;

    /**
     * Get the value of id_tarea_usuario
     */ 
    public function getId_tarea_usuario()
    {
        return $this->id_tarea_usuario;
    }

    /**
     * Set the value of id_tarea_usuario
     *
     * @return  self
     */ 
    public function setId_tarea_usuario($id_tarea_usuario)
    {
        $this->id_tarea_usuario = $id_tarea_usuario;

        return $this;
    }

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
     * Get the value of id_usuario
     */ 
    public function getId_usuario()
    {
        return $this->id_usuario;
    }

    /**
     * Set the value of id_usuario
     *
     * @return  self
     */ 
    public function setId_usuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;

        return $this;
    }

    /**
     * Get the value of estado_tarea
     */ 
    public function getEstado_tarea()
    {
        return $this->estado_tarea;
    }

    /**
     * Set the value of estado_tarea
     *
     * @return  self
     */ 
    public function setEstado_tarea($estado_tarea)
    {
        $this->estado_tarea = $estado_tarea;

        return $this;
    }
}



?>
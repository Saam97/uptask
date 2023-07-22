<?php

namespace Model;

class Tarea extends ActiveRecord{
    protected static $tabla = 'tarea';
    protected static $columnasDB = ['id', 'nombre', 'estado', 'proyectoid'];

    public function __construct($args = []) {
        
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->estado = $args['estado'] ?? 0;
        $this->proyectoid = $args['proyectoid'] ?? '';


    }
}
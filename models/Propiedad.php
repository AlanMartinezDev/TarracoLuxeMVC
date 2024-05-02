<?php

namespace App;

class Propiedad extends ActiveRecord
{
    protected static $tabla = 'propiedades';
    protected static $columnasDB = ['id', 'titulo', 'precio', 'imagen', 'descripcion', 'habitaciones', 'wc', 'plazas', 'creado', 'vendedorId'];

    public $id;
    public $titulo;
    public $precio;
    public $imagen;
    public $descripcion;
    public $habitaciones;
    public $wc;
    public $plazas;
    public $creado;
    public $vendedorId;

    public function __construct($args = [])
    {
        $this->id = $args["id"] ?? null;
        $this->titulo = $args["titulo"] ?? "";
        $this->precio = $args["precio"] ?? "";
        $this->imagen = $args["imagen"] ?? "";
        $this->descripcion = $args["descripcion"] ?? "";
        $this->habitaciones = $args["habitaciones"] ?? "";
        $this->wc = $args["wc"] ?? "";
        $this->plazas = $args["plazas"] ?? "";
        $this->creado = date('Y/m/d');
        $this->vendedorId = $args["vendedorId"] ?? "";
    }

    public function validar()
    {
        if (!$this->titulo) {
            self::$errores[] = "Debes añadir un título";
        }

        if (strlen($this->titulo) > 45) {
            self::$errores[] = "El título no debe superar los 45 caracteres";
        }

        if (!$this->precio) {
            self::$errores[] = "Debes añadir un precio";
        }

        if (!$this->imagen) {
            self::$errores[] = "Debes añadir una imagen";
        }

        if (strlen($this->descripcion) < 50) {
            self::$errores[] = "Debes añadir una descripcion que tenga al menos 50 caracteres";
        }

        if (!$this->habitaciones) {
            self::$errores[] = "Debes añadir al menos una habitación";
        }

        if (!$this->wc) {
            self::$errores[] = "Debes añadir al menos un baño";
        }

        if (!$this->plazas) {
            self::$errores[] = "Debes añadir al menos una plaza";
        }

        if (!$this->vendedorId) {
            self::$errores[] = "Debes añadir un vendedor";
        }

        return self::$errores;
    }
}

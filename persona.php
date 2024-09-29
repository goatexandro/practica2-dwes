<?php

class Persona {
    protected $nombre;
    protected $apellido;
    protected $altura;
    protected $edad;

    public function __construct($nombre, $apellido, $altura, $edad) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->altura = $altura;
        $this->edad = $edad;
    }

    public function getNombre() {
        return $this->nombre;
    }


    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }
    
    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }

    public function hablar() {
        echo "*hablando*";
    }

    public function caminar() {
        echo "*caminando*";
    }
}

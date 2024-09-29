<?php

class Informatico extends Persona {
    protected $lenguajes;
    protected $experienciaProgramador;

    public function __construct($nombre, $apellido, $altura, $edad, $lenguajes, $experienciaProgramador) {
        parent::__construct($nombre, $apellido, $altura, $edad);
        $this->lenguajes = $lenguajes;
        $this->experienciaProgramador = $experienciaProgramador;
    }

    public function getLenguajes() {
        return $this->lenguajes;
    }

    public function setLenguajes($lenguajes) {
        $this->lenguajes = $lenguajes;
    }

    public function getExperienciaProgramador() {
        return $this->experienciaProgramador;
    }

    public function setExperienciaProgramador($experienciaProgramador) {
        $this->experienciaProgramador = $experienciaProgramador;
    }
   

    public function programar() {
        echo "*estoy programando*";
    }

    public function repararOrdenador() {
        echo "*reparando el ordednador*";
    }

    public function hacerOfimatica() {
        echo "haciendo ofimatica";
    }
}

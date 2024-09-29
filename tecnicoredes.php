<?php

class TecnicoRedes extends Informatico {
    protected $auditarRedesExperiencia;

    public function __construct($nombre, $apellido, $altura, $edad, $lenguajes, $experienciaProgramador, $auditarRedesExperiencia) {
        parent::__construct($nombre, $apellido, $altura, $edad, $lenguajes, $experienciaProgramador);
        $this->auditarRedesExperiencia = $auditarRedesExperiencia;
    }

    public function getAuditarRedesExperiencia() {
        return $this->auditarRedesExperiencia;
    }

    public function setAuditarRedesExperiencia($auditarRedesExperiencia) {
        $this->auditarRedesExperiencia = $auditarRedesExperiencia;
    }

    public function auditarRedes() {
        echo "*auditando redes*" ;
    }
}

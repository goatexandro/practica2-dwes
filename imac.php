<?php

class IMac implements telefono {
    public $software; 
    public $marca;    

    public function __construct($marca, $software) {
        $this->setMarca($marca);
        $this->setSoftware($software);
    }

    public function setMarca($marca) {
        $this->marca = $marca; 
    }

    public function getMarca() {
        return $this->marca; 
    }

    public function setSoftware($software) {
        $this->software = $software;
    }


    public function getSoftware() {
        return $this->software; 
    }
}

?>
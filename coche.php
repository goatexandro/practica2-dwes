<?php
class Coche
{
    public $color = "Rojo";
    public $marca = "Ferrari";
    public $modelo = "Aventador";
    public $velocidad = 300;
    public $caballaje = 500;
    public $plazas = 2;

    public function __construct($color = "Rojo", $marca = "Ferrari", $modelo = "Aventador", $velocidad = 300, $caballaje = 500, $plazas = 2)
    {
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->caballaje = $caballaje;
        $this->plazas = $plazas;
    }


    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function getVelocidad()
    {
        return $this->velocidad;
    }

    public function setVelocidad($velocidad)
    {
        $this->velocidad = $velocidad;
    }

    public function getCaballaje()
    {
        return $this->caballaje;
    }

    public function setCaballaje($caballaje)
    {
        $this->caballaje = $caballaje;
    }

    public function getPlazas()
    {
        return $this->plazas;
    }

    public function setPlazas($plazas)
    {
        $this->plazas = $plazas;
    }

    public function acelerar()
    {
        $this->velocidad++;
    }

    public function frenar()
    {
        $this->velocidad--;
    }

    public function ver_velocidad()
    {
        return $this->velocidad;
    }

    public function informacionCoche($coche)
    {
        if (is_object($coche)) {
            echo "Información del coche:<br>";
            echo "Color: " . $this->color . "<br>";
            echo "Marca: " . $this->marca . "<br>";
            echo "Modelo: " . $this->modelo . "<br>";
            echo "Velocidad: " . $this->velocidad . " km/h<br>";
            echo "Caballaje: " . $this->caballaje . " CV<br>";
            echo "Plazas: " . $this->plazas . "<br>"."<br>";
     
        }
    }


    
}
?>
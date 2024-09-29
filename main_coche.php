<?php

require_once './coche.php';

$coche = new Coche("Amarillo", "Renault", "Clio", 150, 200, 5);
$coche1 = new Coche("Verde", "Seat", "Panda", 250, 200, 5);
$coche2 = new Coche("Azul", "Citroen", "Xara", 100, 220, 4);
$coche3 = new Coche("Rojo", "Mercedes", "Clase A", 350, 100, 3);

$coche->informacionCoche($coche);
$coche1->informacionCoche($coche1);
$coche2->informacionCoche($coche2);
$coche3->informacionCoche($coche3);

$coche->setColor("ROSA");
$coche->setMarca("Audi");


echo "ACELERANDO"."<br>";


$coche -> acelerar($coche);
$coche -> acelerar($coche);
$coche -> acelerar($coche);
$coche -> acelerar($coche);

echo "FRENANDO"."<br>";
$coche -> frenar($coche);

$coche->informacionCoche($coche);


echo "Detalles del coche:"."<br>";
var_dump($coche);
var_dump($coche1);
var_dump($coche2);
var_dump($coche3);

echo "<br>";
echo "<br>";

echo "Modelo del primer coche: ";
var_dump($coche->getModelo());
echo "<br>"; 

?>
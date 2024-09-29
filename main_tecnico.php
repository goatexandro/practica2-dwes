<?php

require_once './Persona.php';
require_once './Informatico.php';
require_once './TecnicoRedes.php';

$tecnico = new TecnicoRedes("Mario", "Alvarez", 1.50, 40, "Javascript, PHP", 4, 6);

echo "Me llamo: "."<br>";
echo $tecnico->getNombre() . " " . $tecnico->getApellido() . "\n"; 
echo "<br>"."<br>"."Voy a hablar "."<br>";
$tecnico->hablar();  
echo "<br>"."<br>"."Voy a caminar "."<br>";
$tecnico->caminar();  
echo "<br>"."<br>"."Voy a programar "."<br>";
$tecnico->programar(); 
echo "<br>"."<br>"."Voy a auditar redes "."<br>";
$tecnico->auditarRedes();  
echo "<br>"."<br>"."Y esta es la informacion completa"."<br>"."<br>";

var_dump($tecnico);

?>

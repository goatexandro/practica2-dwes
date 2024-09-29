<?php

require_once './telefono.php'; 
require_once './imac.php'; 

$iMac1 = new IMac("mac 3077", "macOS ");

echo 'marca: ' . $iMac1->getMarca() . "<br>"; 
echo 'software: ' . $iMac1->getSoftware() . "<br>"; 

echo ' la marca del telefono es: ' . Telefono::Marca  ; 
?>

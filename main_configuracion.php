<?php


require_once './configuracion.php';  

Configuracion::$color = "Rojo";
Configuracion::$newsletter="La salida del nuevo iphone 16 ¡ES IGUAL QUE EL 15!";
Configuracion::$entorno="bueno";


echo "Color: " . Configuracion::getColor() . "<br>";
echo "Newsletter: " . Configuracion::getNewsletter()  . "<br>";
echo "Entorno: " . Configuracion::getEntorno();

/*En los atributos estaticos se llaman a partir de un self:: en vez de con un this-> como en un objeto normal ya que los estaticos no hacen referencia al objeto si no a la clase, se puede hacer llamando al atributo en la clase o al metodo*/ 
/*Y no, no debemos instanciarla ya que se le puede hacer referencia llamando a los atributos y metodoss directamente, que esto viene ligado al tema de que los estaticos van con la clase no con el objeto*/
?>



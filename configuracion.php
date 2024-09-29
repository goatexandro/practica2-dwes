<?php

class Configuracion {
    // Definición de propiedades estáticas
    public static $color;
    public static $newsletter;
    public static $entorno;

    // Getters y setters estáticos
    public static function getColor() {
        return self::$color; // Se usa self:: para hacer referencia a las propiedades estáticas de la misma clase
    }

    public static function setColor($color) {
        self::$color = $color;
    }

    public static function getNewsletter() {
        return self::$newsletter;
    }

    public static function setNewsletter($newsletter) {
        self::$newsletter = $newsletter;
    }

    public static function getEntorno() {
        return self::$entorno;
    }

    public static function setEntorno($entorno) {
        self::$entorno = $entorno;
    }
}

?>

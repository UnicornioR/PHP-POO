<?php
    class Persona{
        private $nombre;
        protected int $edad;
        public static $nombreAux;

        public function __construct($nombre, $edad){
            $this->nombre = $nombre;
            $this->edad = $edad;
            self::$nombreAux = $nombre;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
        public function getEdad(){
            return $this->edad;
        }
        public function setEdad($edad){
            $this->edad = $edad;
        }
        // public function saludar(){
        //     echo "Hola, mi nombre es " . $this->nombre;
        // }
        public  static function saludar(){
                    return self::$nombreAux;
                }
    }

?>
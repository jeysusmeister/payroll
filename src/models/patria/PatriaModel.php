<?php
    namespace PayRoll\models\patria;

    use PayRoll\models\ConexionBd; 
    
    class PatriaModel {
        public static function obtener(string $numero):int {
            return $numero+1;
        }
        



    }
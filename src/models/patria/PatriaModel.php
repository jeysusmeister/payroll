<?php

    namespace PayRoll\models\patria;
    require realpath('../../../vendor/autoload.php');
    use PayRoll\models\ConexionBd; 
    
    class PatriaModel {
        public static function obtener($numero):string {
            return $numero." esto";
        }
        
    }
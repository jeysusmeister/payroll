<?php

    namespace PayRoll\models\patria;
    require realpath('../../../vendor/autoload.php');
    use PayRoll\models\ConexionBd; 
    
    class PatriaModel {
        public static function obtenerDesNom($numero):string {
            $sql = 'SELECT desnom FROM sno_nomina WHERE codnom=?'; 
            $sth = ConexionBd::conectar()->prepare($sql);
            $sth->execute(array($numero));
            $desnom = $sth->fetchAll;           
            return $desnom;
        }

        
        
    }
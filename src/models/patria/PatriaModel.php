<?php

    namespace PayRoll\models\patria;
    require realpath('../../models/ConexionBd.php');
    use PayRoll\models\ConexionBd; 
    
    class PatriaModel {
        public static function obtenerDesNom($numero):string {
            $con = new ConexionBd();
            $sql = 'SELECT desnom FROM sno_nomina WHERE codnom=?'; 
            $sth = $con->conectar()->prepare($sql);
            $sth->execute(array($numero));
            $desnom = $sth->fetchAll;           
            return $desnom;
        }

        
        
    }
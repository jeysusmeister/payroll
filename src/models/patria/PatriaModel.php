<?php

    namespace PayRoll\models\patria;
    //require realpath('../../../vendor/autoload.php');
    use PayRoll\models\ConexionBd; 
    
    class PatriaModel {
        public static function obtenerDesNom($numero):string {
            $con = new ConexionBd();
            $sql = 'SELECT desnom FROM sno_nomina WHERE codnom=?'; 
            $sth = $con->conectar()->prepare($sql);
            $sth->execute(array($numero));
            $desnom = $sth->fetchAll();
            foreach ($desnom as $key => $value) {
                # code...
                echo $key;
            }   
            echo "<pre>";
            var_dump($desnom);
            
            return $desnom['desnom'];
        }

        
        
    }
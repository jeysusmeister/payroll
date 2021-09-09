<?php

    namespace PayRoll\models;
	use PDO;
    class ConexionBd {
        public function conectar() {
            try {
	      $link=new \PDO("pgsql:host=172.16.0.101;port=5433;dbname=prueba;","postgres","s1st3m4s2424bd",[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
if ($link) {
		echo "Connected to theb database successfully!";
	}else{ echo "no";}
            } catch (Exception $e) {
               echo "ERROR ";
            }

            return $link;
        }


    }

$a = new ConexionBd();
$a->conectar();    

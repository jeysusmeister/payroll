<?php
    namespace PayRoll\models;
	use PDO;

    class ConexionBd {
        public function conectar() {
            try {
                $link=new \PDO("pgsql:host=172.116.0.101;port=5433;dbname=prueba;","postgres","s1st3m4s2424bd",[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
                if ($link) {
                    echo "Connected to theb database successfully!";
                }else{ 
                    echo "no";
                }
            } catch (PDOException $e) {
                die("[ERROR] ".$e->getMessage());
            }
            return $link;
        }

    }

$a = new ConexionBd();
$a->conectar();    

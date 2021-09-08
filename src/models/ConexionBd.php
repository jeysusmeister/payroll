<?php

    namespace PayRoll\models;

    class ConexionBd {
        public function conectar() {
            echo 12345;
            try {
                $link=new PDO("pgsql:host=172.16.0.101;port=5439;dbname=prueba","postgres","s1st3m4s2424bd", 
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
            ); echo "funciona";
            } catch (PDOException $e) {
                die("ERROROPOPOP ".$e->getMessage());
            }            
            return $link;
        }


    }

$a = new ConexionBd();
$a->conectar();    
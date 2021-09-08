<?php

    namespace PayRoll\models;

    class ConexionBd {
        public function conectar() {
            try {
                $link=new PDO("pgsql:host=127.0.0.1;port=5432;dbname=prueba","postgres","503503", 
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
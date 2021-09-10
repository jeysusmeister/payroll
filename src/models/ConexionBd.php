<?php

    namespace PayRoll\models;

	use PDO;
        
    class ConexionBd {
        private static $host;
        private static $port;
        private static $dbname;
        private static $user;
        private static $pass;
        
        public function __construct() {
            //require_once realpath('./config/database.php');
            ConexionBD::setHost('172.16.0.101');
            ConexionBD::setDbname('tves_2021');
            ConexionBD::setUser('postgres');
            ConexionBD::setPass('s1st3m4s2424bd');
            ConexionBD::setPort('5433');
        }
        public static function conectar():PDO {
            $paramConex = [
                "host"   => ConexionBD::getHost(),
                "dbname" => ConexionBD::getDbname(),
                "user"   => ConexionBD::getUser(),
                "pass"   => ConexionBD::getPass(),
                "port"   => ConexionBD::getPort()
            ];

            try {
                $link=new \PDO("pgsql:host=".$paramConex['host'].";port=".$paramConex['port'].";dbname=".$paramConex['dbname'].";",$paramConex['user'],$paramConex['pass'],[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);                
                echo "conexion exitosa";
            } catch (PDOException $e) {
                die("[ERROR] ".$e->getMessage());
            }
            return $link;
        }
        public static function getHost():string{
            return ConexionBD::$host;
        }
        public static function setHost(string $host):void{
            ConexionBD::$host=$host;
        }
        public static function getPort():string{
            return ConexionBD::$port;
        }
        public static function setPort(string $port):void{
            ConexionBD::$port=$port;
        }
        public static function getDbname():string{
            return ConexionBD::$dbname;
        }
        public static function setDbname(string $dbname):void{
            ConexionBD::$dbname=$dbname;
        }
        public static function getUser():string{
            return ConexionBD::$user;
        }
        public static function setUser(string $user):void{
            ConexionBD::$user=$user;
        }
        public static function getPass():string{
            return ConexionBD::$pass;
        }
        public static function setPass(string $pass):void{
            ConexionBD::$pass=$pass;
        }
    }
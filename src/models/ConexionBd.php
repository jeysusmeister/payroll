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
            self::setHost('172.16.0.101');
            self::setDbname('tves_2021');
            self::setUser('postgres');
            self::setPass('s1st3m4s2424bd');
            self::setPort('5433');
        }
        public static function conectar():PDO {
            $paramConex = [
                "host"   => self::getHost(),
                "dbname" => self::getDbname(),
                "user"   => self::getUser(),
                "pass"   => self::getPass(),
                "port"   => self::getPort()
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
            return self::$host;
        }
        public static function setHost(string $host):void{
            self::$host=$host;
        }
        public static function getPort():string{
            return self::$port;
        }
        public static function setPort(string $port):void{
            self::$port=$port;
        }
        public static function getDbname():string{
            return self::$dbname;
        }
        public static function setDbname(string $dbname):void{
            self::$dbname=$dbname;
        }
        public static function getUser():string{
            return self::$user;
        }
        public static function setUser(string $user):void{
            self::$user=$user;
        }
        public static function getPass():string{
            return self::$pass;
        }
        public static function setPass(string $pass):void{
            self::$pass=$pass;
        }
    }
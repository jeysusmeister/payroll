<?php

    namespace PayRoll\models;

	use PDO;
        
    class ConexionBd {
        private $host;
        private $port;
        private $dbname;
        private $user;
        private $pass;
        public function __construct() {
            //require_once realpath('./config/database.php');
            $this->setHost('172.16.0.101');
            $this->setDbname('tves_2021');
            $this->setUser('postgres');
            $this->setPass('s1st3m4s2424bd');
            $this->setPort('5433');
        }
        public function conectar():PDO {
            $paramConex = [
                "host"   => $this->getHost(),
                "dbname" => $this->getDbname(),
                "user"   => $this->getUser(),
                "pass"   => $this->getPass(),
                "port"   => $this->getPort()
            ];
            var_dump($paramConex);die;
            try {
                $link=new \PDO("pgsql:host=".$paramConex['host'].";port=".$paramConex['port'].";dbname=".$paramConex['dbname'].";",$paramConex['user'],$paramConex['pass'],[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);                
                echo "conexion exitosa";
            } catch (PDOException $e) {
                die("[ERROR] ".$e->getMessage());
            }
            return $link;
        }
        public function getHost():string{
            return $this->host;
        }
        public function setHost(string $host):void{
            $this->host=$host;
        }
        public function getPort():string{
            return $this->port;
        }
        public function setPort(string $port):void{
            $this->port=$port;
        }
        public function getDbname():string{
            return $this->dbname;
        }
        public function setDbname(string $dbname):void{
            $this->dbname=$dbname;
        }
        public function getUser():string{
            return $this->user;
        }
        public function setUser(string $user):void{
            $this->user=$user;
        }
        public function getPass():string{
            return $this->pass;
        }
        public function setPass(string $pass):void{
            $this->pass=$pass;
        }
    }
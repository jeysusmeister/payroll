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
            require_once realpath('./config/database.php');
            $this->setHost(HOST);
            $this->setDbname(DBNAME);
            $this->setUser(USER);
            $this->setPass(PASS);
            $this->setPort(PORT);
        }

        public function conectar():PDO {
            try {
                $link=new \PDO("pgsql:host=$this->getHost();port=$this->getPort();dbname=$this->getDbname();","$this->getUser()","$this->getPass()",[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);                
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

$a = new ConexionBd();
$a->conectar();    

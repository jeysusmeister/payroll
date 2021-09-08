<?php
    require_once realpath('../../controllers/patria/PatriaController.php');
    use \PayRoll\controllers\patria\PatriaController;
    class Procesar{
        private $numero;
        public function __construct(){
            $this->numero=0;
        }
        public function getNumero():string {
            return $this->numero;
        }
        public function setNumero(string $numero):void {
            $this->numero=$numero;
        }
        public function obtenerControladorPatria(string $numero){
            $asd = new PatriaController();
            $asd->obtener($numero);                       
        }
    }
    
    $a=new Procesar();
    $a->setNumero($_POST['numero']);
    $numero=$a->getNumero();
    $a->obtenerControladorPatria($numero);







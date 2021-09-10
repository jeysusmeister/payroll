<?php
    namespace PayRoll\controllers\patria;
    require_once realpath('../../../vendor/autoload.php');
    use PayRoll\models\patria\PatriaModel;
    
    class PatriaController {
        public function obtener(string $numero):void {
           $a=PatriaModel::obtenerDesNom($numero);
           echo $a;       
        }

    }
    
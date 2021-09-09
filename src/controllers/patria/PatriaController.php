<?php
    namespace PayRoll\controllers\patria;

    use PayRoll\models\patria\PatriaModel;
    require_once realpath('../../models/patria/PatriaModel.php');
    
    
    class PatriaController {
        public function obtener(string $numero):void {
           $a=PatriaModel::obtener($numero);
           echo $a;       
        }

    }
    
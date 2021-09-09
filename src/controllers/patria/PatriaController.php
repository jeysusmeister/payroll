<?php
    namespace PayRoll\controllers\patria;

    use \PayRoll\models\patria\PatriaModel;
    
    
    class PatriaController {
        public function obtener(string $numero):void {
            //$patriamodel = PatriaModel::obtener($numero);
            echo $numero;
            
        }

    }
    
<?php
    namespace PayRoll\controllers\patria;

    
    
    
    class PatriaController {
        public function obtener(string $numero):void {
           $patriamodel = \PayRoll\models\patria\PatriaModel::obtener($numero);
           echo $patriamodel;           
        }

    }
    
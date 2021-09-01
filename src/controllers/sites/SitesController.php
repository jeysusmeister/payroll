<?php
    namespace PayRoll\controllers\sites;

    use PayRoll\models\sites\SitesModel;

    class SitesController {
        public function __construct() {}
        public function actionInicio() {
            include realpath('./src/views/template.phtml');
        }
        public function obtenerModulos():void{
            $action=$_GET['action'];
            if(isset($action)){
                $ruta=SitesModel::obtenerModulos($action);
            } else {
                $action="inicio";
                $ruta=SitesModel::obtenerModulos($action);
            }
            echo $ruta;
            include realpath($ruta);
        }
    }
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
            echo $action;
            if(isset($action)){
                $ruta=SitesModel::obtenerModulos($action);
            } else if(!isset($action)) {
                $action="inicio";
                $ruta=SitesModel::obtenerModulos($action);
            }
            include realpath($ruta);
        }
    }
<?php
    //Visualización de errores
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
    // end del proyecto
    require realpath('./vendor/autoload.php');
    require realpath('./config/main.php');
    use PayRoll\controllers\sites\SitesController;
    use PayRoll\models\patria\PatriaModel;
    $sites = new SitesController();
    $sites->actionInicio();
    //$a = PatriaModel::obtenerDesNom('0101');
    //var_dump($a);die;
    //echo $a;
    


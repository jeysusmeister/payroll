<?php 
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

    require_once realpath('./vendor/autoload.php');
    require_once realpath('./src/models/ConexionBd.php');
    require_once realpath('./config/main.php');
    use PayRoll\controllers\sites\SitesController;
    use PayRoll\models\ConexionBd;
    /*$sites = new SitesController();
    $sites->actionInicio(); */
	$a = new ConexionBd();
//    var_dump($a);
   var_dump( $a->conectar());

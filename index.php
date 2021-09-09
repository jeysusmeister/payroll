<?php
    //Visualización de errores
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
    // end del proyecto
    require_once realpath('./vendor/autoload.php');
    require_once realpath('./config/main.php');
    use PayRoll\controllers\sites\SitesController;
    use PayRoll\models\ConexionBd;
    $a = new ConexionBd();
    $a->conectar();
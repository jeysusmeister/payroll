<?php 
    require_once realpath('./vendor/autoload.php');
    require_once realpath('./config/main.php');
    use PayRoll\controllers\sites\SitesController;
    use PayRoll\models\ConexionBd;
    $sites = new SitesController();
    $sites->actionInicio(); 

    echo 12345;
    $a = new \PayRoll\models\ConexionBd();
    $a->conectar();
    
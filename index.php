<?php 
    require_once realpath('./vendor/autoload.php');
    require_once realpath('./config/main.php');
    use PayRoll\controllers\sites\SitesController;
    $sites = new SitesController();
    $sites->actionInicio(); 
    
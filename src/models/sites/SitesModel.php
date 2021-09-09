<?php
    namespace PayRoll\models\sites;

    class SitesModel {
        public static function obtenerModulos(string $action):string {
            if( $action=='inicio' ||
                $action=='patria' ){
                $ruta = './src/views/modules/'.$action.'.phtml';
            } else {
                $ruta = './src/views/modules/404.phtml';
            }
            return $ruta;
        }
    }
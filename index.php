<?php

/*
 * FILE INDEX PRINCIPALE
 */

// Definizione percorso principale
define('PATH', __DIR__);

// Definizione DIrectory Separator
define('DS', '/');

// Require del file di configurazione dei percorsi assoluti
if(is_dir(PATH.DS.'config') && is_readable(PATH.DS.'config'.DS.'paths.php')){
    require_once PATH.DS.'config'.DS.'paths.php';
}
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

// Require del file di configurazione principale
if(is_dir(PATH.DS.'config') && is_readable(PATH.DS.'config'.DS.'config.php')){
    require_once PATH.DS.'config'.DS.'config.php';
}

// Require del controller principale di sistema
require_once CORE.DS.'ControllerIndex.php';

// Require del routing
if(is_readable(CORE.DS.'Routing.php')){
    require_once CORE.DS.'Routing.php';
    $routing=new Routing();
}else{
    die('Si è verificato un errore. Verificare il corretto funzionamento dei file di sistema');
}
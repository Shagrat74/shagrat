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

// Require del controller principale di sistema
if(is_readable(CORE.DS.'ControllerIndex.php')){
    require_once CORE.DS.'ControllerIndex.php';
    $CI=new ControllerIndex();
    echo '<pre>';
    var_dump($CI);
}else{
    die('Si è verificato un errore. Verificare il corretto funzionamento dei file di sistema');
}
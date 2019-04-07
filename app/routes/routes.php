<?php defined('PATH') or die();

/*
 * File contenente le routes pubbliche dell'applicazione
 */

/*
 * Route principale
 * Deve necessariamente trovarsi prima di tutte le altre routes
 */

$routes[]=array(
    'name'=>BASE_CONTROLLER,
    'method_name'=>'',
    'controller'=>BASE_CONTROLLER,
    'method'=>'',
    'args'=>0,
    'admin'=>false
);


/*
 * Routes
 */

$routes[]=array(
    'name'=>'prova3',
    'method_name'=>'',
    'controller'=>'Controller1',
    'method'=>'',
    'args'=>0,
    'admin'=>false
);

$routes[]=array(
    'name'=>'prova',
    'method_name'=>'riprova',
    'controller'=>'Controller1',
    'method'=>'sprova',
    'args'=>0,
    'admin'=>false
);
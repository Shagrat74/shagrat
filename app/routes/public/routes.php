<?php defined('PATH') or die();

/*
 * File contenente le routes pubbliche dell'applicazione
 */

/*
 * Route principale
 * Deve necessariamente trovarsi prima di tutte le altre routes
 */
$routes[]=array(
    'name'=>'',
    'controller'=>BASE_CONTROLLER,
    'args'=>false
);

/*
 * Routes
 */
$routes[]=array(
    'name'=>'prova',
    'controller'=>'Controller1',
    'args'=>false
);

$routes[]=array(
    'name'=>'prova2',
    'controller'=>'Controller2',
    'args'=>false
);

$routes[]=array(
    'name'=>'prova3',
    'controller'=>'Controller2',
    'args'=>false
);
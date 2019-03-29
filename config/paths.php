<?php

/*
 * File contenente i percorsi assoluti del framework
 */

// Definizione percorso directory sistema
if(is_dir(PATH.DS.'system')){
    define('SYS', PATH.DS.'system');
}

// Definizione percorso directory applicazione
if(is_dir(PATH.DS.'app')){
    define('APP', PATH.DS.'app');
}

// Definizione percorso directory risorse
if(is_dir(PATH.DS.'assets')){
    define('ASSETS', PATH.DS.'assets');
}

// Definizione percorso directory configurazione
if(is_dir(PATH.DS.'config')){
    define('CONF', PATH.DS.'config');
}

// Definizione percorso file css
if(is_dir(ASSETS.DS.'css')){
    define('CSS', PATH.DS.'css');
}

// Definizione percorso file js
if(is_dir(ASSETS.DS.'js')){
    define('JS', PATH.DS.'js');
}

// Definizione percorso file immagine
if(is_dir(ASSETS.DS.'img')){
    define('IMG', PATH.DS.'img');
}

// Definizione percorso file video
if(is_dir(ASSETS.DS.'video')){
    define('VIDEO', PATH.DS.'video');
}

// Definizione percorso fonts
if(is_dir(ASSETS.DS.'fonts')){
    define('FONTS', PATH.DS.'fonts');
}

// Definizione percorso file caricati
if(is_dir(ASSETS.DS.'uploads')){
    define('UPLOAD', PATH.DS.'uploads');
}

// Definizione percorso other
if(is_dir(ASSETS.DS.'other')){
    define('OTHER', PATH.DS.'other');
}


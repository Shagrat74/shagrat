<?php defined('PATH') or die();

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
    define('CSS', ASSETS.DS.'css');
}

// Definizione percorso file js
if(is_dir(ASSETS.DS.'js')){
    define('JS', ASSETS.DS.'js');
}

// Definizione percorso file immagine
if(is_dir(ASSETS.DS.'img')){
    define('IMG', ASSETS.DS.'img');
}

// Definizione percorso file video
if(is_dir(ASSETS.DS.'video')){
    define('VIDEO', ASSETS.DS.'video');
}

// Definizione percorso fonts
if(is_dir(ASSETS.DS.'fonts')){
    define('FONTS', ASSETS.DS.'fonts');
}

// Definizione percorso file caricati
if(is_dir(ASSETS.DS.'uploads')){
    define('UPLOAD', ASSETS.DS.'uploads');
}

// Definizione percorso other
if(is_dir(ASSETS.DS.'other')){
    define('OTHER', ASSETS.DS.'other');
}

// Definizione percorso controller dell'applicazione
if(is_dir(APP.DS.'controllers')){
    define('CTR', APP.DS.'controllers');
}

// Definizione percorso modelli dell'applicazione
if(is_dir(APP.DS.'models')){
    define('MDL', APP.DS.'models');
}

// Definizione percorso viste dell'applicazione
if(is_dir(APP.DS.'views')){
    define('VIEWS', APP.DS.'views');
}

// Definizione percorso librerie dell'applicazione
if(is_dir(APP.DS.'libraries')){
    define('LIB', APP.DS.'libraries');
}

// Definizione percorso helpers dell'applicazione
if(is_dir(APP.DS.'helpers')){
    define('HELP', APP.DS.'helpers');
}

// Definizione percorso routes dell'applicazione
if(is_dir(APP.DS.'routes')){
    define('ROUTES', APP.DS.'routes');
}

// Definizione percorso directory core di sistema
if(is_dir(SYS.DS.'core')){
    define('CORE', SYS.DS.'core');
}
// Definizione percorso directory librerie di sistema
if(is_dir(SYS.DS.'libraries')){
    define('SYSTEM_LIB', SYS.DS.'libraries');
}

// Definizione percorso directory helpers di sistema
if(is_dir(SYS.DS.'helpers')){
    define('SYSTEM_HELP', SYS.DS.'helpers');
}

// Definizione percorso directory database
if(is_dir(SYS.DS.'database')){
    define('DB_PATH', SYS.DS.'database');
}


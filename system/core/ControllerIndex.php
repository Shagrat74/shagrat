<?php defined('PATH') or die();

class ControllerIndex{
    
    public $ci,
            $routing;
    
    public function __construct(){
        
        self::config_files();
        //self::routing();
        
    }
    
    // Require di tutti i file di configurazione presenti nella directory
    private function config_files(){
        foreach(scandir(CONF) as $config_file){
            if($config_file=='index.php' || $config_file=='.' || $config_file=='..'){
                continue;
            }else if(is_readable(CONF.DS.$config_file)){
                require_once CONF.DS.$config_file;
            }
        }
    }
    
    private function routing(){
        if(is_readable(CORE.DS.'Routing.php')){
            require_once CORE.DS.'Routing.php';
            $routing=new Routing();
        }else{
            die('Si è verificato un errore. Verificare il corretto funzionamento dei file di sistema');
        }
    }
    
}
<?php defined('PATH') or die();

class ControllerIndex{
    
    public $ci;
    
    public function __construct(){
        
        self::config_files();
        
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
    
}
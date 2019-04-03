<?php defined('PATH') or die();

/*
 * File contenente la classe che gestisce il routing e le rotte
 */

class Routing{
    
    private $uri;
    public $routes=array();
    
    public function __construct(){
        
        $this->uri=self::split_url();
        self::router($this->uri);
    }
    
    private function split_url(){
        $uri=$_SERVER['REQUEST_URI'];
        $uri=explode('/', $uri);
        array_shift($uri);
        return $uri;
    }
    
    private function router($uri){
        
    }
    
}
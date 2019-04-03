<?php defined('PATH') or die();

/*
 * File contenente la classe che gestisce il routing e le rotte
 */

class Routing{
    
    private $uri;
    public $routes;
    
    public function __construct(){
        
        $this->uri=self::split_url();
        $this->routes=self::get_routes();
        self::router($this->uri);
    }
    
    private function split_url(){
        $uri=$_SERVER['REQUEST_URI'];
        $uri=substr($uri, 0, strlen($stringa)-1);
        $uri=explode('/', $uri);
        array_shift($uri);
        return $uri;
    }
    
    private function get_routes(){
        $routes=array();
        if(is_readable(P_ROUTES.DS.'routes.php')){
            require_once P_ROUTES.DS.'routes.php';
        }
        return $routes;
    }
    
    private function verify_route($route){
        $controllers=self::get_controllers();
        $res=true;
        if(!in_array($route['controller'], $controllers)){
            $res=false;
        }
        if(!method_exists($route['controller'], $route['method']) && $route['method']!=null){
            $res=false;
        }
        return $res;
    }
    
    private function get_controllers(){
        $controllers=array();
        foreach(scandir(CTR) as $controller){
            if($controller=='index.php' || $controller=='.' || $controller=='..'){
                continue;
            }else if(is_readable(CTR.DS.$controller)){
                    $controller=str_replace('.php', '', $controller);
                    $controllers[]=$controller;
            }
        }
        return $controllers;
    }
    
    private function router($uri){
        if(!isset($uri[1])){
            
        }
    }
    
}
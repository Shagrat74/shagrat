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
        print_r($this->uri);
    }
    
    private function split_url(){
        $uri=$_SERVER['REQUEST_URI'];
        if(substr($uri, -1)=='/'){
            $uri=substr($uri, 0, strlen($stringa)-1);
        }
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
        require_once CTR.DS.$route['controller'].'.php';
        $res=true;
        if(!in_array($route['controller'], $controllers)){
            $res=false;
        }
        if(!method_exists($route['controller'], $route['method']) && $route['method']!=null){
            $res=false;
        }
        if($route['args']===true && !isset($this->uri[3])){
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
    
    private function setMethod($route){
        $method='';
        if($route['method']===''){
            $method='index';
        }else{
            $method=$route['method'];
        }
        return $method;
    }
    
    private function goto_route($route){
        if(self::verify_route($route)){
            require_once CTR.DS.$route['controller'].'.php';
            $controller=new $route['controller'];
            $method=self::setMethod($route);
            $controller->$method();
        }else{
            echo 'La route ha problemi mentali';
        }
    }
    
    private function router($uri){
        $route=array();
        /*if(!isset($uri[1])){
            $route=$this->routes[0];
            if(self::verify_route($route)){
                require_once CTR.DS.$route['controller'].'.php';
                $controller=new $route['controller'];
                $method=self::setMethod($route);
                $controller->$method();
            }else{
                echo '404';
            }
        }else{
            foreach($this->routes as $route){
                if($uri[1]==$route['name']){
                    if(self::verify_route($route)){
                        require_once CTR.DS.$route['controller'].'.php';
                        $controller=new $route['controller'];
                        $method=self::setMethod($route);
                        $controller->$method();
                    }else{
                        echo '404';
                    }
                    break;
                }else{
                    continue;
                }
            }
        }*/
        if(count($uri)===1){
            echo '1';
        }else if(count($uri)===2){
            echo '2';
        }else if(count($uri)>=3){
            
        }
    }
    
}
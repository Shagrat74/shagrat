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
    
    private function setRouteController($uri){
        $route=array();
        foreach($this->routes as $routes){
            if($uri[1]===$routes['name'] && $routes['method_name']===''){
                $route=$routes;
                break;
            }
        }
        return $route;
    }
    
    private function setRouteMethod($uri){
        $route=array();
        foreach($this->routes as $routes){
            if($uri[1]===$routes['name'] && $uri[2]===$routes['method_name'] && $routes['args']===(count($uri)-3)){
                $route=$routes;
                break;
            }
        }
        return $route;
    }
    
    private function split_url(){
        $uri=$_SERVER['REQUEST_URI'];
        if(substr($uri, -1)=='/'){
            $uri=substr($uri, 0, strlen($uri)-1);
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
    
    private function getRoute($uri){
        $route=array();
        if(count($uri)===1){
            $route=$this->routes[0];
        }else if(count($uri)===2){
            $route=self::setRouteController($uri);
            if(count($route)<1){
                $route=false;
            }
        }else if(count($uri)>=3){
            $route=self::setRouteMethod($uri);
            if(count($route)<1){
                $route=false;
            }
        }
        return $route;
    }
    
    private function getMethod($route){
        $method='';
        if($route['method']===''){
            $method='index';
        }else{
            if(self::verifyMethod($route['method'], $route['controller'])){
                $method=$route['method'];
            }else{
                $method=false;
            }
        }
        return $method;
    }
    
    private function verifyMethod($method, $controller){
        if(method_exists($controller, $method)){
            return true;
        }else{
            return false;
        }
    }
    
    private function getArgs($uri){
        $args=array();
        for($i=3; $i<count($uri); $i++){
            $args[]=$uri[$i];
        }
        return $args;
    }
    
    private function router($uri){
        $route=self::getRoute($uri);
        if($route===false || count($uri)===0){
            echo '404';
        }else{
            require_once CTR.DS.$route['controller'].'.php';
            $controller=new $route['controller'];
            $method=self::getMethod($route);
            if(count($uri)<=3){
                $controller->$method();
            }else{
                $args=self::getArgs($uri);
                $controller->$method($args);
            }
        }
    }
    
}
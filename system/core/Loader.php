<?php defined('PATH') or die();

class Loader{
    
    private function verifyViewPath($view){
        if(is_dir(VIEWS) && is_readable(VIEWS.DS.$view.'.php')){
            return true;
        }else{
            return false;
        }
    }
    
    public function view($view, $data=null){
        if(self::verifyViewPath($view)){
            require VIEWS.DS.$view.'.php';
        }else{
            die('La view richiesta non è disponibile');
        }
    }
    
}
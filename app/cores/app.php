<?php

namespace MVC\cores;

class app{
    public $controlles = 'homecontrolles';
    public $method = 'index';
    public $random = [];

    public function __construct()
    {
        $this->url();
        $this->ranom();
    }

    public function url(){
        if(!empty($_SERVER['QUERY_STRING']))
        {
            $url = explode('/',$_SERVER['QUERY_STRING']);

            $this->controlles = isset($url[0]) ? $url[0].'controlles' :'home';

            $this->method = isset($url[1]) ? $url[1] :'index';

            unset($url[0],$url[1]);

            $this->random = array_values($url);

        }
    }

    public function ranom(){
        $controlles = 'MVC\controlles\\'.$this->controlles;
        if(class_exists($controlles)){
            $controlles = new $controlles;
            if(method_exists($controlles,$this->method)){
call_user_func_array([$controlles,$this->method],$this->random);
            }
        }
    }
}
<?php

namespace MVC\cores;

class hellper{
    public static function view($path,$prams=[]){
        extract($prams);
        include VIEWS.$path.'.php';
    }


    public static function viewuser($path){
        header('LOCATION:'.URL.$path);
    }    



}
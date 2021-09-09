<?php

namespace MVC\controlles;
use MVC\cores\hellper;
use MVC\cores\session;
use MVC\models\categoryModel;

class dashboardcontrolles{

    public function __construct()
    {
        session::start();

        if(empty(session::get('user'))){
            exit('is not assess');
        }
    }

    public function index(){
        $categoryModel = new categoryModel();
       $countdata =  $categoryModel->numCategory();

        hellper::view('dashboard'.DS.'dashboard',['countCategory'=>$countdata]);
    }

}

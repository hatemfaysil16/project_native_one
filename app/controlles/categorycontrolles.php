<?php

namespace MVC\controlles;
use MVC\cores\hellper;
use MVC\cores\session;
use MVC\models\categoryModel;

class categorycontrolles{

    public $categorsyModel;

    public function __construct()
    {
        session::start();
        if(empty(session::get('user'))){
            exit('is not assess');
        }
        $this->categorsyModel=categoryModel::desinePatter();
        
    }

    public function add(){
        hellper::view('dashboard'.DS.'category/add',['title'=>'index']);
    }

    public function add2(){
        if($this->categorsyModel->InsetData($_POST))
        hellper::viewuser('category'.DS.'index');
    }

    public function index(){
         $data_user = $this->categorsyModel->GetAllUser();
         hellper::view('dashboard'.DS.'category/index',['data'=>$data_user]);
    }


    public function delete($id){
        if($this->categorsyModel->DeleteUser($id))
        // hellper::viewuser('category'.DS.'index');
        echo '.';

    }


    public function update($id){
        if($dataupdates=$this->categorsyModel->GetUpdateUser($id))
        hellper::view('dashboard'.DS.'category/update',['title'=>$dataupdates]);
    }


    public function update2(){
        if(!empty($this->categorsyModel->UpdateCategory($_POST,$_POST['id'])))
        hellper::viewuser('category'.DS.'index');
    }
    
}

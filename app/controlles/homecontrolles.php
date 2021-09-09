<?php

namespace MVC\controlles;
use MVC\cores\hellper;
use MVC\models\site_settingModel;
use MVC\models\categoryModel;

class homecontrolles extends categoryModel{

    public function index(){
        $site_settingModel = new site_settingModel();
        $theam = $site_settingModel->Getsetting('theam');
        $theam2 = $site_settingModel->Getsetting('headline');
        $categoryModel = new categoryModel();
        $datauser = $categoryModel->GetAllUser();
 

    hellper::view('website'.DS.$theam.'/index',['data'=>'data_user','thems'=>$theam2,'datauser'=>$datauser]);
    }
}






































// public function index(){
//     $site_settingModel = new site_settingModel();
//     $theam=$site_settingModel->GetSetting('theam');
//     hellper::view('website'.DS.$theam.'/index',['data'=>'data_user']);

// }

<?php
   
namespace MVC\controlles;
use MVC\cores\hellper;
use MVC\cores\session;
use MVC\models\site_settingModel;

class sitesettingcontrolles{
    public $site_settingModel;

    public function __construct()
    {
        session::start();
        $this->site_settingModel = new site_settingModel();

        if(empty(session::get('user'))){
            exit('is not assess');
        }
    }

    public function thems(){
     hellper::view('dashboard'.DS.'site_setting/thems',['countCategory'=>'countdata']);
    }

    public function postsetting(){
        $site_settingModel = new site_settingModel();
        $data =  $site_settingModel->UpdateSetting($_POST , 1);
        if($data){
            hellper::viewuser('sitesetting'.DS.'thems');
        }
    }

    public function setting(){
        $site_settingModel = new site_settingModel();
        $data = $site_settingModel->Getsetting('headline');



        hellper::view('dashboard'.DS.'site_setting/setting',['data'=>$data]);
    }

    public function postsettings(){
        $site_settingModel = new site_settingModel();

        $datas = [
            'site_value'=>$_POST['site_value']
        ];

        
        $data =  $site_settingModel->UpdateSetting($datas , 2);
        if($data){
            hellper::viewuser('sitesetting'.DS.'setting');
        }
    }

}





























// class sitesettingcontrolles{
//     public $site_settingModel;

//     public function __construct()
//     {
//         session::start();
//         $this->site_settingModel = new site_settingModel();

//         if(empty(session::get('user'))){
//             exit('is not assess');
//         }
//     }

//     public function setting(){
//         hellper::view('dashboard'.DS.'site_setting/setting',['countCategory'=>'countdata']);
//     }
//     public function postsetting(){
//       $resum = $this->site_settingModel->UpdateSetting($_POST,1);
//       if($resum)
//       hellper::viewuser('sitesetting'.DS.'setting');

//     }

// }
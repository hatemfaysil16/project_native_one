<?php

namespace MVC\models;
use MVC\cores\db;




class site_settingModel extends db{
   
public function Getsetting($key){
    $setting = $this->all("SELECT `site_value` from `site_setting` WHERE `sitekey`='$key'");
    $setting =$setting[0]['site_value'];
    return $setting;
}
public function UpdateSetting($value , $id){
    $setting = $this->update($value,$id);
    return $setting;      

}
    

}














// class site_settingModel extends db{
//     public function GetSetting($key){
//         $setting = $this->all("SELECT `site_value` FROM `site_setting` WHERE `sitekey`='$key'");
//         return $setting[0]['site_value'];
//         print_r($setting);die;
//     }

//     public function UpdateSetting($value,$id){
//         $setting =  $this->update($value,$id);
//         return $setting;      
//     }

    

// }
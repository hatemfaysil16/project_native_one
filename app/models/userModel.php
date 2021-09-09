<?php

namespace MVC\models;
use MVC\cores\db;




class userModel extends db{
    public function GetAllInstractur($email,$password){
        $users =  $this->all("SELECT * FROM `user`WHERE `email`='$email'&&`password`='$password'");
        return $users[0];
      }


}
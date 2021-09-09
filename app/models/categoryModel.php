<?php

namespace MVC\models;
use MVC\cores\db;




class categoryModel extends db{

    private static $object;
      public static function  desinePatter()
      {
        if(isset(self::$object)){
          return self::$object;
        }else{
          self::$object = new categoryModel;
          return self::$object;
        }
      }

      public function numCategory(){
        return $this->select_count();
      }

    public function GetAllInstractur($email,$password){
        return $this->all("SELECT * FROM `user`WHERE `email`='$email'&&`password`='$password'");
      }



      public function GetAllUser(){
        return $this->all("SELECT * FROM `category`");
      }

      public function InsetData($data){
        return $this->Insert($data);
      }


      public function DeleteUser($id){
        return $this->delete($id);
      }



      public function GetUpdateUser($id){
        return $this->All("SELECT * FROM `category` WHERE `id`=$id");
      }
  
      public function UpdateCategory($data,$id){
        return $this->update($data,$id);
      }




}
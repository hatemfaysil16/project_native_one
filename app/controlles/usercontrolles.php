<?php

namespace MVC\controlles;
use MVC\cores\hellper;
use MVC\models\userModel;
use MVC\cores\session;
class usercontrolles {


    public function __construct()
    {
        session::start();
        if(!empty(session::get('user'))){
            echo '<pre>';
            print_r(session::get('user'));
            echo '</pre>';
            hellper::viewuser('category'.DS.'index');
        }
    }


    public function login(){
 
        $login = 'is login';
        hellper::view('dashboard'.DS.'login',['title'=>$login]);
        if(!empty($_POST['email'])){

            $email = $_POST['email'];
            $password = $_POST['password'];
            $userModel = new userModel();
            $userdata = $userModel->GetAllInstractur($email,$password);
            session::set('user',$userdata);
            if(!empty($userdata)){
                hellper::viewuser('dashboard'.DS.'index');
            }

        }
     }

     public function logout(){
        session::stop();
        hellper::viewuser('user'.DS.'login');
    }

}
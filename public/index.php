<?php

define('ROOT',dirname(__DIR__));
define('DS', DIRECTORY_SEPARATOR);


define('CONTROLLES',ROOT.DS.'app'.DS.'controlles'.DS);
define('CORES',ROOT.DS.'app'.DS.'core'.DS);
define('MODELS',ROOT.DS.'app'.DS.'models'.DS);
define('VIEWS',ROOT.DS.'app'.DS.'views'.DS);
define('VENDOR' , ROOT.DS.'vendor'.DS.'autoload.php');

define('DSN', 'mysql:hos=localhost;dbname=cms');
define('DB_USER', 'root');
define('DB_PASS', '');



define('URL',"http://localhost/laravel_tut/native/project_native_one/public/");
define('ASSESIT', 'http://localhost/laravel_tut/native/project_native_one/public/');


// login
// username:hatem faysil
// email:hatemfaysil16@gmail.com
// password:123456789

require(VENDOR);




$b = new MVC\cores\app();






<?php



// namespace ab;
//     function aa(){
//         echo 111;
//     }

// namespace cd;
//     function aa()
//     {
//         echo 222;
//     }














// exit;
define('APP_PATH', dirname(__FILE__));
require_once APP_PATH . '\autoLoad.php';
$Pm = explode('/', $_GET['r']);
$aa = "new " . $Pm[0] . "Controller()";
$C = eval("return $aa;");
$C->$Pm[1]();

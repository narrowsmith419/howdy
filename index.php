<?php
//turn on error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);

//require auto-load function
require_once('vendor/autoload.php');

//create instance of Base class
$f3 = Base::instance();

//define default route
$f3->route('GET /',function(){
    //echo "<h1>Sup World</h1>";
    $view = new Template();
    echo $view->render('views/home.html');
    echo "<h2>I tipped my cowboy hat two times, partner</h2>";

});

$view = new Template();
echo $view->render('views/home.html');

//run fat-free
$f3->run();
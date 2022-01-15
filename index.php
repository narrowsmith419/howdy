<?php

//require auto-load function
require_once('vendor/autoload.php');

//create instance of Base class
$f3 = Base::instance();

//define default route
$f3->route('GET /',function(){
    echo "<h1>Sup World</h1>";
});

$view = new Template();
echo $view->render('views/home.html');

//run fat-free
$f3->run();
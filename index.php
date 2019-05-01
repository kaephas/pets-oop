<?php
/*
 * Kaephas Kain
 * /date/
 * /filename/
 * 
 * /description/
 */

session_start();

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require autoload file
require_once('vendor/autoload.php');

//create an instance of the Base class
$f3 = Base:: instance();

//Turn on Fat-free error reporting
$f3->set('DEBUG', 3);

//Define a default route
$f3->route('GET /', function () {
    $view = new Template();
    echo $view->render('views/my-pets.html');
});

//run Fat-free
$f3->run();

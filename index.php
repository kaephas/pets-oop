<?php
/*
 * Kaephas Kain
 * /date/
 * /filename/
 * 
 * /description/
 */


//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require autoload file
require_once 'vendor/autoload.php';

session_start();

//create an instance of the Base class
$f3 = Base:: instance();

//Turn on Fat-free error reporting
$f3->set('DEBUG', 3);

//Define a default route
$f3->route('GET /', function ($f3) {
    // instantiate a Pet
    $pet1 = new Pet();
    $pet1->setName('Fido');
    $f3->set('pet1', $pet1);
    $f3->set('pet2', new Pet('Smoky', 'magenta'));
    $f3->set('pet3', new Pet('Garfield'));
    $view = new Template();
    echo $view->render('views/my-pets.html');
});

//run Fat-free
$f3->run();

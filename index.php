<?php

use ml\laege\Controllers\VaccineController;


require_once __DIR__ . '/vendor/autoload.php';

use Carbon\Carbon;

$dotenv = \Dotenv\Dotenv::create(__DIR__);
$dotenv->load();



Flight::route('/', function(){
  Flight::render('frontpage', array('body'), 'body_content');
  Flight::render('layout', array('title' => 'Home Page'));
 });

 Flight::route('/login', function(){
   // $login = UserController::checkUserLogin();
   Flight::render('login', array('body'), 'body_content');
   Flight::render('layout', array('title' => 'Login Page'));
});

Flight::start();
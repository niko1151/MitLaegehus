<?php

use ml\laege\Controllers\VaccineController;
use Gettext\{GettextTranslator, TranslatorFunctions};

require_once __DIR__ . '/vendor/autoload.php';

use ml\laege\fix\laegephplib\Feverspots;
use fix\db\PDO; 
use Carbon\Carbon;

$dotenv = \Dotenv\Dotenv::create(__DIR__);
$dotenv->load();

$t = new GettextTranslator();
$t->setLanguage('da_DK');
$t->loadDomain('users', 'locale');

Flight::route('/', function(){
  $Vaccines = VaccineController::getAllVacc();
  Flight::render('frontpage', array('body' => $Vaccines), 'body_content');
  Flight::render('layout', array('title' => 'Home Page'));
 });

 Flight::route('/login', function(){
   // $login = UserController::checkUserLogin();
   Flight::render('login', array('body'), 'body_content');
   Flight::render('layout', array('title' => 'Login Page'));
});

// Flight::route('/api', function() {
//     $url = 'http://localhost/MitLaegehus/api';
//     $response = file_get_contents($url);
//     Flight::json(json_decode($response));
// });


Flight::start();
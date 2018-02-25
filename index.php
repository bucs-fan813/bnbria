<?php 
ini_set('display_errors',1);
require 'vendor/autoload.php';
$f3 = \Base::instance();

$f3->set('AUTOLOAD','class/');

$f3->config('config.ini');

class Page {
    function home() {
        //echo 'I cannot object to an object';
        $oauth = new \OAuth_Client('d41656b1-a632-4fde-b36a-fa081d8957d0','19877638-c794-4802-a562-05517dacbd8a	');
        k($oauth->get_oauth_client());
    }
}


$f3->run();
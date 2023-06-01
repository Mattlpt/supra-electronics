<?php
use services\Dispatcher;
use model\Connection;
require('services/Dispatcher.php');
require('model/Connection.php');
require('model/User.php');
include('header.php');
if ( empty(session_id()) ) session_start();

//REQUEST MANAGEMENT
$url = $_SERVER['REQUEST_URI'];
$dispatcher = new Dispatcher($url);
$connection = new Connection();
$connection->start();
$GLOBALS['dispatcher'] = $dispatcher;
$GLOBALS['connection'] = $connection;
$dispatcher->dispatch();

function renderView($name, $vars = [], $title = 'Supraelectronics'): void
{
   // echo $name;
    if(file_exists('view/'.$name))
    {
        $page_include = 'view/'.$name;
        $page_title = $title;
        include('view/global/globalView.php');
    }else{
        echo "TEMPLATE INTROUVABLE";
       // header('HTTP/1.0 404 Not Found');
       // die;
    }
}

function renderPublicView($name, $vars = [], $title = 'Supraelectronics') : void
{
    if(file_exists('view/'.$name))
    {
        $page_include = 'view/'.$name;
        $page_title = $title;
        include('view/public/globalView.php');
    }else {
        echo "TEMPLATE INTROUVABLE";
        // header('HTTP/1.0 404 Not Found');
        // die
    }
}
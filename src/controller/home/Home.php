<?php
namespace controller\home;

class Home{

    public function __construct()
    {
    }

    public static function renderMainView():void
    {
        renderView('home/index.view.php');
    }
}
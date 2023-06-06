<?php

class Dashboard{

    public function __construct()
    {
    }

    public static function renderMainView():void
    {
        echo 'la';
        renderView("dashboard/Dashboard.view.php", NULL, "dashboard");
    }
}

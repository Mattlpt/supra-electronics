<?php

class Analytics{

    public function __construct()
    {
    }

    public static function renderMainView():void
    {
        renderView("analyse/analytics.view.php", NULL, "Analytics");
    }
}

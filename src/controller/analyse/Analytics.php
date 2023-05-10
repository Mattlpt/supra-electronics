<?php

class Analytics{

    public function __construct()
    {
    }

    public static function renderView():void
    {
        renderView("analyse/analytics.view.php", NULL, "Analytics");
    }
}

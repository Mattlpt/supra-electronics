<?php

class Stats
{
    public function __construct()
    {
    }

    public static function renderMainView():void
    {
        renderView("analyse/stats.view.php", NULL, "Stats");
    }
}


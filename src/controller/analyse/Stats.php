<?php

namespace controller\analyse;

class Stats
{
    public function __construct()
    {

    }

    public static function renderMainView():void
    {
        renderView("analyse/stats.view.php", NULL, "Stats");
        print_r('passage');
    }
}


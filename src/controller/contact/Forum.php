<?php

namespace controller\contact;

class Forum
{
    public function __construct()
    {
    }

    public static function renderMainView():void
    {
        renderView("contact/forum.view.php", NULL, "forum");
    }
}
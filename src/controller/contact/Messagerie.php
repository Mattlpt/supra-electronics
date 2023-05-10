<?php

class Messagerie{

    public function __construct()
    {
    }

    public static function renderMainView():void
    {
        renderView("contact/messagerie.view.php", NULL, "messagerie");
    }
}

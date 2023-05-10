<?php

namespace controller\public;

class Accueil
{
    public function __construct()
    {

    }

    public static function renderView(): void
    {
        renderPublicView('public/accueil.view.php', NULL, "Supra Electronics");
    }

}
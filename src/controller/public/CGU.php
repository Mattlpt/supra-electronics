<?php

namespace controller\public;

class CGU
{
    public function __construct()
    {

    }

    public static function renderMainView(): void
    {
        renderView('global/CGU.view.php', NULL, "Supra Electronics");
    }

    public static function renderAcceptenceView(): void
    {
        renderPublicView('public/CGU.view.php', NULL, "Supra Electronics");
    }

}
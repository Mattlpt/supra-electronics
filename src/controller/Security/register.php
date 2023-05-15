<?php
namespace controller\security;

use model\User;

class Register{

    public function __construct()
    {

    }

    public static function renderMainView():void
    {
        renderPublicView("public/register.view.php", NULL, "register");
    }

    public static function registerUser() {
        
        $db = $GLOBALS['db'];
        User::$db = $db;
        $user = new User();
        $user->setUsername($_POST['username']);
        $user->setFirstname($_POST['firstname']);
        $user->setLastname($_POST['lastname']);
        $user->setMail($_POST['email']);
        $user->setPassword($_POST['password']);
        $user->insertOrUpdate();
    }
}

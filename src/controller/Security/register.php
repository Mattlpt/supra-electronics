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
        $alerte = "null";
        $check = false;
        foreach($_POST as $value) {
            if(isset($value) && $value != "") {
                $check = true;
            }
            else {
                $check = false;
                break;
            }
        }
        if($check) {
            if($_POST['password'] == $_POST['confirm_password']) {
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
            else {
                $alerte = "les mdp match pas";
            }
            
        }
        else {
            $alerte = "Veuillez remplir tt les champs";
        }
        var_dump($alerte);
    }
}

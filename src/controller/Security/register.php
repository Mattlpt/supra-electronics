<?php
namespace controller\security;

use model\User;
use src\model\connection;

include('model/UserRequest.php');

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
            $fetcheduser = fetchUser($_POST['username']);
            if($fetcheduser == null) {
                if($_POST['password'] == $_POST['confirm_password']) {
                    $check2 = true;

                    if (strlen($_POST['password']) < 8 || strlen($_POST['password']) > 16) {
                        //$errors[] = "Password should be min 8 characters and max 16 characters";
                        $check2 = false;
                    }
                    if (!preg_match("/\d/", $_POST['password'])) {
                        //$errors[] = "Password should contain at least one digit";
                        $check2 = false;
                    }
                    if (!preg_match("/[A-Z]/", $_POST['password'])) {
                        //$errors[] = "Password should contain at least one Capital Letter";
                        $check2 = false;
                    }
                    if (!preg_match("/[a-z]/", $_POST['password'])) {
                        //$errors[] = "Password should contain at least one small Letter";
                        $check2 = false;
                    }
                    if (!preg_match("/\W/", $_POST['password'])) {
                        //$errors[] = "Password should contain at least one special character";
                        $check2 = false;
                    }

                    if($check2 == true) {
                        $user = new User();
                        $user->setUsername($_POST['username']);
                        $user->setFirstname($_POST['firstname']);
                        $user->setLastname($_POST['lastname']);
                        $user->setMail($_POST['email']);
                        $user->setPassword($_POST['password']);
                        $user->insertOrUpdate();
                    }
                    else {
                        $alerte = "mauvaise condition";
                    }
                }
                else {
                    $alerte = "les mdp match pas";
                }
            }
            else {
                $alerte = "le nom d'utilisateur est deja pris";
            }
        }
        else {
            $alerte = "Veuillez remplir tt les champs";
        }
        var_dump($alerte);
    }
}

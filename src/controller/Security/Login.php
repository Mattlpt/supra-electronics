<?php
namespace controller\security;

use model\User;
use src\model\connection;
include('model/UserRequest.php');

class Login{

    public function __construct()
    {

    }

    public static function renderMainView():void
    {
        renderPublicView("public/login.view.php", NULL, "login");
    }

    public static function loginUser() {
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
            $user = fetchUser($_POST['username']);
            if($user['password_user'] == $_POST['password']) {
                $_SESSION['logged_user'] = $user;
                header("Location: /user");
            }
        }
            
    }

}

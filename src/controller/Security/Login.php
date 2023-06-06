<?php
namespace controller\security;

use model\User;
use services\Dispatcher;
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
                if($check) {
                    $user = fetchUser($_POST['username']);
                    if(password_verify($_POST['password'], $user['password_user'])) {
                        $_SESSION['logged_user'] = $user;
                        header('Location: /dashboard');

                    }
                }
            }
            else {
                $check = false;
                header('Location: /login');
                break;
            }
        }


            
    }

}

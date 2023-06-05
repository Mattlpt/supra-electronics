<?php

namespace services;

use Analytics;
use controller\contact\Forum;
use controller\home\Home;
use controller\security\Login;
use controller\security\Register;
use controller\public\Accueil;
use controller\user\UserController;
use Dashboard;
use Messagerie;
use Stats;
use controller\config\Configu;

class Dispatcher
{
    private ?string $page = null;
    private ?string $module = null;

    private ?string $arg = null;

    public string $path = '';
    public function __construct(string $path)
    {
        $this->path = $path;
        $this->detectUrl();
    }

    public function dispatch()
    {
        if($this->module !== null && $this->module != '')
        {
            switch ($this->module)
            {
                case 'login':
                    include('controller/security/login.php');
                    Login::renderMainView();
                    Login::loginUser();
                    break;

                case 'config':
                    include('controller/config/config.php');
                    break;

                case 'stats':
                    include('controller/analyse/Stats.php');
                    Stats::renderMainView();
                    break;

                case 'analytics':

                    include('controller/analyse/Analytics.php');
                    Analytics::renderMainView();
                    break;

                case 'messagerie':
                    include('controller/contact/Messagerie.php');
                    Messagerie::renderMainView();
                    break;

                case 'forum':
                    include('controller/contact/Forum.php');
                    Forum::renderMainView();
                    Forum::newTopic();
                    break;

                case 'user':
                    include('controller/user/UserController.php');
                    UserController::user();
                    break;

                case'supraelectronic':
                    include('controller/public/Accueil.php');
                    Accueil::renderMainView();
                    break;

                case 'register' :
                    include('controller/security/register.php');
                    Register::renderMainView();
                    Register::registerUser();
                    break;
                
                case 'home' :
                    include("controller/home/Home.php");
                    Home::renderMainView();
                    break;

                case'CGU':
                    include('controller/public/CGU.php');
                    break;
                
                case 'dashboard':
                    include('controller/dashboard/Dashboard.php');
                    Dashboard::renderMainView();
                    break;


                case 'home' :
                    include("controller/home.index.php");
                    Home::renderMainView();
                    break;

                case 'connexion' :
                    include('controller/Security/Login.php');
                    Login::loginUser();
                    break;

                default:
                    include('controller/home/index.php');
            }
        }
        else{
            include('controller/public/accueil.php');
            Accueil::renderMainView();
        }
    }

    private function detectUrl(): void
    {
        $explode = explode('/',$this->path);

        if(isset($explode[1]))
        {
            $this->module = $explode[1];
        }

        if(isset($explode[2]))
        {
            $this->page = $explode[2];
            if (str_contains($this->page, '?')) {
                $pageandarg = explode('?',$explode[2]);
                $this->arg = $pageandarg[1];
                $this->page = $pageandarg[0];
            }
        }

    }

    public function getPage(): ?string
    {
        return $this->page;
    }

    public function getModule(): ?string
    {
        return $this->module;
    }

    public function getArg(): ?string
    {
        return $this->arg;
    }


}
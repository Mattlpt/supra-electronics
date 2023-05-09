<?php

namespace services;

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
                    include('controller/secure/login.php');
                    break;

                case 'config':
                    include('controller/config/config.php');
                    break;

                case 'stats':
                    include('controller/analyse/stats.php');
                    break;

                case 'analytics':

                    include('controller/analyse/analytics.php');
                    break;

                case 'messagerie':
                    include('controller/contact/messagerie.php');
                    break;

                case 'user':
                    include('controller/user/index.php');
                    break;

                case'accueil':
                    include('controller/public/accueil.php');
                    break;
                case'CGU':
                    include('controller/public/CGU.php');
                    break;

                default:
                    include('controller/home/index.php');
            }
        }
        else{
            include('controller/home/index.php');
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
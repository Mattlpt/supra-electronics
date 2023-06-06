<?php

namespace controller\user;

use model\User;
use model\connection;
include('model/UserRequest.php');

class UserController
{
    public function __construct()
    {
    }

    public static function user():void
    {
        if($GLOBALS['dispatcher']->getPage() !== null && $GLOBALS['dispatcher']->getPage()  !== '')
        {

            switch ($GLOBALS['dispatcher']->getPage())
            {
                //ajout d'un utilisateur
                case 'add':
                    //là on fait tous les traitement pour ajouter une personne
                    if(!empty($_POST))
                    {
                        //là on fait le traitement du formulaire.. il faudrait gerer les autres elements
                        $user = new User();
                        $user->setLastname($_POST['nom']);
                        $user->setFirstname($_POST['prenom']);
                        $user->setUsername($_POST['username']);
                        $user->setMail($_POST['mail']);

                        //appel du Modèle pour sauvergarde dans la BDD
                        $user->insertOrUpdate();

                        //redirection vers la page user
                        header("Location: /user");
                        die();
                    }else{
                        //là on affiche le formulaire
                        renderView('user/user.add.php',[],'Ajouter un utilisateur');
                    }
                    break;

                case 'update':
                    if(isset($_GET['id']) && $_GET['id']>0)
                    {
                        $user = User::getOneOrNullUserById($_GET['id']);
                        if(empty($_POST))
                        {
                            //affichage du formulaire pré-rempli

                            renderView('user/user.edit.php', ['user'=>$user], 'Modifier un utilisateur');
                        }else{
                            //traitement du formulaire

                            $user->setUsername($_POST['username']);
                            $user->setMail($_POST['mail']);
                            $user->setLastname($_POST['nom']);
                            $user->setFirstname($_POST['prenom']);
                            $user->insertOrUpdate();
                            header("Location: /user");
                            die();
                        }


                    }

                    break;
                //suppresion d'un user
                case 'delete':
                    //là il faudrait vérifier si on a le droit de faire cette action...

                    if(!empty($_GET))
                    {
                        $user = fetchUserId($_GET['id']);
                        if($user !== null)
                        {
                            removeUser($_GET['id']);
                        }
                    }
                    header("Location: /user");
                    break;
            }
        }else{

            //page d'accueil des users

            //la j'appelle le modèle pour selectioner tous les users
            $userListe = getAllUser();
            $vars['usersListe'] = $userListe;


            renderView('user/user.view.php',$vars, 'Utilisateurs');
        }
    }
}
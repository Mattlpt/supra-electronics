<?php
//MODULE CONFIGURATION
//Fait par @Matthieu Laporte


use model\User;

$db = $GLOBALS['db'];
User::$db = $db;
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
                $user = User::getOneOrNullUserById($_GET['id']);
                if($user !== null)
                {
                    $user->delete();
                }
            }
            header("Location: /user");
            break;
    }
}else{

    //page d'accueil des users

    //la j'appelle le modèle pour selectioner tous les users
    $userListe = User::getAllUser($db);
    $vars['usersListe'] = $userListe;

    //là je selectionne un seul User à partir du modèle
    $moi = User::getOneOrNullUserById(1,$db);
    //là je selection un ou plusieurs user dont le fistname est julein
    $julien = User::getUsersByField('firstname_user','julien',$db);


    renderView('user/user.view.php',$vars, 'Utilisateurs');
}





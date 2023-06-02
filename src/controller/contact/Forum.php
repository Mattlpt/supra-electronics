<?php

namespace controller\contact;

class Forum
{
    private $bdd;
    public function __construct()
    {
    }

    public static function renderMainView():void
    {
        renderView("contact/forum.view.php", NULL, "forum");
    }


    public function forum($bdd): void
    {
        if (isset($_POST['valider'])) {
            if (!empty($_POST['pseudo']) and !empty($_POST['message'])) {
                $pseudo = htmlspecialchars($_POST['pseudo']);
                $message = nl2br(htmlspecialchars($_POST['message']));
                $insererMessage = $bdd->prepare('INSERT INTO messages (pseudo, message) VALUES (?, ?)');
                $insererMessage->execute(array($pseudo, $message));
            } else {
                echo "Veuillez compléter tous les champs...";
            }
        }
    }

}
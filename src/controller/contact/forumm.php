<?php
$bdd = new PDO('mysql: host=localhost; dbname=messagerie; charset=utf8;', 'root', 'root');
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
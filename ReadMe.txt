Configuration et installation

1 : installer Docker et Docker Desktop,
    en lignes de commande, dans le dossier du projet tapper ; docker-compose up
    vérifier que les 4 containers sont bien en train de tourner

2 : aller dans le fichier header.php, à la ligne 11 dans la connexion à la BdD retirer le .db_name
    allez sur votre navigateur et tapper 'localhost', verifier qu'il se passe quelque chose.
    S'il n'y a pas d'erreur tapper 'localhost/config/installdb' et normalement il y aura un message disant 'INITIATION DE LA DB'
    ensuite naviguer sur le site a votre bonne guise

Utilisation

1 : pour démarrer le serveur local, juste faire sur le terminal ; docker-compose up
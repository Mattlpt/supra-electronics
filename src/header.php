<?php
//database connection cred
$db_name =  'supraelectronics';
$db_user = 'root';
$db_pass = 'secret';
$db_host = 'mysql';

try {
    #$db = new PDO("mysql:host=". $db_host, $db_user, $db_pass);
    #$db->exec($db_name);
    $db = new PDO("mysql:host=". $db_host.";port=3307" .";dbname=".$db_name, $db_user, $db_pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch(Exception $e) {
    echo 'Database connection error.'.$e->getMessage();
    exit();
}


$GLOBALS['db'] = $db;

//gestion du User et de la session .

//si pas de user autentifié on renvoi sur la page de login
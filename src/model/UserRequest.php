<?php

use PDO;

function fetchUser(String $string) {
    $query = $db->prepare("Select * FROM user WHERE username_user = :username");
    $query->execute([
        'username'=>$string
    ]);
    $result = $query->fetchAll();
    return $result;
}
?>
<?php
use model\Connection;
use model\User;

function fetchUser(String $string) {
    $db = $GLOBALS['connection']-> getDb();
    $query = $db->prepare("Select * FROM user WHERE username_user = :username");
    $query->execute([
        'username'=>$string
    ]);
    $result = $query->fetchAll();
    if(sizeof($result) == 0) {
        return null;
    }
    else {
        return $result[0];
    }
}

function  addUser() {
        $db = $GLOBALS['connection']->getDb();
        $query = $db->prepare("INSERT INTO user (username_user, password_user, lastname_user, firstname_user, email_user) VALUES (:username,:password,:nom,:prenom,:mail)");
        $query->execute([
        ]);
        
    }

    function removeUser($id) {
        $db = $GLOBALS['connection']->getDb();
        $query = $db->prepare("DELETE FROM user WHERE id_user = :id");
        $query->execute([
            'id'=>$id
        ]);
    }

function  getAllUser(): array
    {
        $db = $GLOBALS['connection']->getDb();
        $query = $db->prepare("SELECT * FROM user");
        $query->execute();
        $results = $query->fetchAll();
        $array = [];

        foreach($results as $userline)
        {
            $user = new User();
            $user->setId($userline['id_user']);
            $user->setUsername($userline['username_user']);
            $user->setFirstname($userline['firstname_user']);
            $user->setLastname($userline['lastname_user']);
            $user->setMail($userline['email_user']);
            $array[]= $user;
        }

        return $array;
    }

function  getUsersByField(string $field, string $value): array
    {
        $db = $GLOBALS['connection']->getDb();
        $query = $db->prepare("SELECT * FROM user WHERE $field = :val");
        $query->execute(['val'=>$value]);
        $results = $query->fetchAll();
        $array = [];

        foreach($results as $userline)
        {
            $user = new User();
            $user->setId($userline['id_user']);
            $user->setUsername($userline['username_user']);
            $user->setFirstname($userline['firstname_user']);
            $user->setLastname($userline['lastname_user']);
            $user->setMail($userline['email_user']);
            $user->setPassword($userline['password_user']);
            $array[] = $user;
        }
        return $array;
    }

function  fetchUserId(int $id) {
        $db = $GLOBALS['connection']->getDb();
        $query = $db->prepare("SELECT * FROM user WHERE id_user = :id");
        $query->execute(['id'=>$id]);
        $results = $query->fetchAll();
        return $results[0];
    }
?>
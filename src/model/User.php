<?php

namespace model;

use PDO;

class User
{
    private int $id = 0;
    private string $username = '';
    private string $firstname = '';
    private string $lastname = '';
    private string $password = '';
    private string $mail = '';
    private int $user_statu = 0;
    private int $user_bracelet = 0;
    private int $user_company = 0;
    private int $user_factory = 0;


    /**
     * @return string
     */
    public function getMail(): string
    {
        return $this->mail;
    }

    /**
     * @param string $mail
     */
    public function setMail(string $mail): void
    {
        $this->mail = $mail;
    }

    public static PDO $db;


    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     */
    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }


    public function insertOrUpdate():void
    {
        if($this->id !== 0)
        {
            $query = self::$db->prepare("UPDATE user SET username_user = :username, password_user = :password, firstname_user = :firstname, lastname_user = :lastname, email_user = :email WHERE id_user = :id 
            ");
            $result = $query->execute([
                'username' => $this->username,
                'password' => $this->password,
                'firstname' => $this->firstname,
                'lastname'=> $this->lastname,
                'email' => $this->mail,
                'id' => $this->id,
            ]);
        }else{
            $query = self::$db->prepare("INSERT INTO user (username_user, password_user, lastname_user, firstname_user, email_user) VALUES (:username,:password,:nom,:prenom,:mail)");
            $result = $query->execute([
                'username'=>$this->username,
                'password'=>$this->password,
                'nom'=>$this->lastname,
                'prenom'=>$this->firstname,
                'mail'=>$this->mail,
            ]);
        }
    }

    public function delete():void
    {
        if($this->getId() !== 0)
        {
            $query = self::$db->prepare("DELETE FROM user WHERE id_user = :id");
            $query->execute(['id'=>$this->getId()]);
        }
    }

    public static function  getAllUser(): array
    {
        $query = self::$db->prepare("SELECT * FROM user");
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

    public static function  getOneOrNullUserById(int $id): ?User
    {
        $query = self::$db->prepare("SELECT * FROM user WHERE id_user = :id");
        $query->execute(['id'=>$id]);
        $results = $query->fetchAll();

        foreach($results as $userline)
        {
            $user = new User();
            $user->setId($userline['id_user']);
            $user->setUsername($userline['username_user']);
            $user->setFirstname($userline['firstname_user']);
            $user->setLastname($userline['lastname_user']);
            $user->setMail($userline['email_user']);
            return $user;
        }
        return null;
    }

    public static function  getUsersByField(string $field, string $value): array
    {
        $query = self::$db->prepare("SELECT * FROM user WHERE $field = :val");
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
            $array[] = $user;
        }
        return $array;
    }




}
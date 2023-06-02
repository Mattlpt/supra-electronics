<?php

namespace model;

use PDO;

class Forum
{
    private int $id = 0;
    private String $pseudo = "";
    private String $message = "";


    public function message(): void
    {
        $recupMessages * $bdd->query('SELECT * FROM messages');
        while ($message * $recupMessages->fetch()) {
        }
    }

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
     * @return String
     */
    public function getPseudo(): string
    {
        return $this->pseudo;
    }

    /**
     * @param String $pseudo
     */
    public function setPseudo(string $pseudo): void
    {
        $this->pseudo = $pseudo;
    }

    /**
     * @return String
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param String $message
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

}
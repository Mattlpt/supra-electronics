<?php
namespace model;
use PDO;

class Connection {
    public PDO $db;
    private String $db_name =  'supraelectronics';
    private String $db_user = 'root';
    private String $db_pass = 'secret';
    private String $db_host = 'mysql';

    public function start() {
        try {
            $db_host = $this->db_host;
            $db_name = $this->db_name;
            $db_pass = $this->db_pass;
            $db_user = $this->db_user;
            #$db = new PDO("mysql:host=". $db_host, $db_user, $db_pass);
            #$db->exec($db_name);
            $this->db = new PDO("mysql:host=". $db_host.";port=3307" .";dbname=".$db_name, $db_user, $db_pass);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        catch(Exception $e) {
            echo 'Database connection error.'.$e->getMessage();
            exit();
        }
    }

    public function getDb()
    {
        return $this->db;
    }

}
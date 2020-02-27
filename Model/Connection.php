<?php


class Connection
{

    private $dbhost;
    private $dbuser;
    private $dbpass;
    private $db;


    public function openConnection()
    {
// Try to figure out what these should be for you
        $this->dbhost = "localhost";
        $this->dbuser = "mysql";
        $this->dbpass = "password";
        $this->db = "becode";

// Try to understand what happens here
        $pdo = new PDO('mysql:host=' . $this->dbhost . ';dbname=' . $this->db, $this->dbuser, $this->dbpass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

// Why we do this here
        return $pdo;
    }

}
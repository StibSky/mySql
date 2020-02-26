<?php


class Query
{

    private $userArray = [];
    private $connection;
    private $userSelect = 'SELECT * FROM students';

    public function createConnection()
    {
        $this->connection = new Connection();
        return $this->connection->openConnection();
    }

    public function createUserArray()
    {
        foreach ($this->createConnection()->query($this->userSelect) as $user) {
            array_push($this->userArray, $user);
        }

    }

    public function getUserArray()
    {
        return $this->userArray;
    }
}



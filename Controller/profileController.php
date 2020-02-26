<?php



require 'profile.php';


class profileController
{
    private $user;

    public function getProfile($newConnection)
    {
//the get refers to the ?+name of $_GET in the url
        $userId = $_GET['user'];
        $stmt = $newConnection->prepare('SELECT * FROM students WHERE id=:id');
        $stmt->execute(['id' => $userId]);
        $this->user = $stmt->fetch();
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }


}
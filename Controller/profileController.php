<?php




class profileController
{


    public function render()
    {
        $newConnection = new Connection();
        $newConnection = $newConnection->openConnection();
        //the get refers to the ?+name of $_GET in the url
        $userId = $_GET['user'];
        $stmt = $newConnection->prepare('SELECT * FROM students WHERE id=:id');
        $stmt->execute([ $userId]);
        $user = $stmt->fetch();
        require 'View/profile.php';
    }

}
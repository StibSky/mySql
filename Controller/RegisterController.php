<?php


class RegisterController
{
    public function render()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $newConnection = new Connection();
            $newConnection = $newConnection->openConnection();
            $account = new Account($_POST['registerEmail'],
                $_POST['registerPassword']);
            $insertCommand = "INSERT INTO logins (email,password) 
                     VALUES (:registerEmail,:registerPassword)";

            $newConnection->prepare($insertCommand)
                ->execute([
                    'registerEmail' => $account->getRegisterEmail(),
                    'registerPassword' => $account->getRegisterPassword()]);

        }
        require 'View/login.php';
    }
}
<?php


class RegisterController
{
    public function render()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $authentication = new Authentication();
            $authentication->checkmail($_POST['registerEmail']);
            $authentication->checkPassword($_POST['registerPassword']);
            if ($authentication->getIsValidEmail() && $authentication->getIsValidPass()) {
                $newConnection = new Connection();
                $newConnection = $newConnection->openConnection();
                $account = new Account($_POST['registerEmail'],
                   $authentication->getValidPass());
                $insertCommand = "INSERT INTO logins (email,password) 
                     VALUES (:registerEmail,:registerPassword)";

                $newConnection->prepare($insertCommand)
                    ->execute([
                        'registerEmail' => $account->getRegisterEmail(),
                        'registerPassword' => $account->getRegisterPassword()]);
                require 'View/login.php';

            } else {
                require 'View/register.php';
            }

        }

    }
}
<?php


class Authentication
{
    private $isValidEmail;
    private $isValidPass;
    private $validPass;
    private $emailQuery = 'SELECT email FROM logins';
    private $passQuery = 'SELECT password FROM logins ';

    public function checkMail($mail)
    {
        $email = ($mail);
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->isValidEmail = true;
        } else {
            $this->isValidEmail = false;
        }
    }

    public function checkPassword($pass)
    {
        if (!empty($pass)) {
            $this->isValidPass = true;
            $this->validPass = password_hash($pass, PASSWORD_DEFAULT);
        }
    }

    public function loginCheck($inputEmail, $inputPass){
        $newConnection = new Connection();
        $newConnection = $newConnection->openConnection();
        $stmt = $newConnection->prepare("SELECT * FROM logins WHERE email= '$inputEmail'");
        $stmt->execute([ $userId]);
        $user = $stmt->fetch();
    }


    /**
     * @return mixed
     */
    public function getIsValidEmail()
    {
        return $this->isValidEmail;
    }

    /**
     * @return mixed
     */
    public function getIsValidPass()
    {
        return $this->isValidPass;
    }

    /**
     * @return mixed
     */
    public function getValidPass()
    {
        return $this->validPass;
    }


}
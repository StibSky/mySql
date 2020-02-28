<?php


class Authentication
{
    private $isValidEmail;
    private $isValidPass;
    private $validPass;
    private $loginInfoArray;
    private $isLoginValid = false;

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

    public function loginCheck($inputEmail, $inputPass)
    {
        $newConnection = new Connection();
        $newConnection = $newConnection->openConnection();
        $stmt = $newConnection->prepare("SELECT * FROM logins WHERE email= '" . $inputEmail . "'");
        $stmt->execute();
        $this->loginInfoArray = $stmt->fetch(PDO::FETCH_ASSOC);

        if (isset($this->loginInfoArray['password'])) {
            $this->isLoginValid = password_verify($inputPass, $this->loginInfoArray['password']);
        }

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

    /**
     * @return bool
     */
    public function getIsLoginValid(): bool
    {
        return $this->isLoginValid;
    }




}
<?php


class Authentication
{
    private $isValidEmail;
    private $isValidPass;
    private $validPass;

    public function checkmail($mail)
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
<?php


class Account
{
    private $registerEmail;
    private $registerPassword;

    /**
     * Account constructor.
     * @param $registerEmail
     * @param $registerPassword
     */
    public function __construct($registerEmail, $registerPassword)
    {
        $this->registerEmail = $registerEmail;
        $this->registerPassword = $registerPassword;
    }


    /**
     * @return mixed
     */
    public function getRegisterEmail()
    {
        return $this->registerEmail;
    }

    /**
     * @return mixed
     */
    public function getRegisterPassword()
    {
        return $this->registerPassword;
    }

    
    

}
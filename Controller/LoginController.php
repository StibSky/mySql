<?php


class LoginController
{

    function render()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!empty($_POST['register'])) {
                require "View/register.php";
            } elseif (!empty($_POST['create'])) {
                require "View/login.php";
            } elseif (!empty($_POST['login'])) {
                require "View/insert.php";
            }
        } else {
            require "View/login.php";
        }
    }
}
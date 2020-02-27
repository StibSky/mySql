<?php
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'Model/Connection.php';
require 'Model/Query.php';
require 'Model/User.php';
require 'Model/Account.php';
require 'Model/Authentication.php';
require 'Controller/HomepageController.php';
require 'Controller/profileController.php';
require 'Controller/LoginController.php';
require 'Controller/RegisterController.php';

if (!empty($_POST['submitButton'])) {
    $controller = new HomepageController();
    $controller->render();
} elseif (!empty($_POST['create'])) {
    $controller = new RegisterController();
    $controller->render();
} elseif (!isset($_GET['user'])) {
    $controller = new LoginController();
    $controller->render();
} else {
    $profileController = new profileController();
    $profileController->render();
}

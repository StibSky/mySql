<?php
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'Model/Connection.php';
require 'Model/Query.php';
require 'Model/User.php';
require 'Controller/HomepageController.php';
require 'Controller/profileController.php';

if (!isset($_GET['user'])) {
    $controller = new HomepageController();
    $controller->render();
} else {
   $profileController = new profileController();
   $profileController->render();
}

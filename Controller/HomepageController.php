<?php

declare(strict_types=1);


require 'Model/Connection.php';
require 'Model/User.php';
require 'Model/Query.php';
require 'insert.php';

class HomepageController
{
    public function fillDatabase()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $newConnection = new Connection();
            $newConnection = $newConnection->openConnection();
            $user = new User($_POST['firstName'],
                $_POST['lastName'],
                $_POST['username'],
                $_POST['linkedin'],
                $_POST['github'],
                $_POST['email'],
                $_POST['preferred_language'],
                $_POST['avatar'],
                $_POST['video'],
                $_POST['quote'],
                $_POST['quote_author']
            );
            $insertCommand = "INSERT INTO students (firstName, lastName, username, linkedin, github, email, 
                     preferred_language, avatar, video, quote, quote_author) 
                     VALUES (:firstName, :lastName, :username,:linkedin, :github,
                     :email, :preferred_language, :avatar, :video, :quote, :quote_author)";

            $newConnection->prepare($insertCommand)
                ->execute([
                    'firstName' => $user->getFirstName(),
                    'lastName' => $user->getLastName(),
                    'username' => $user->getUsername(),
                    'linkedin' => $user->getLinkedin(),
                    'github' => $user->getGithub(),
                    'email' => $user->getEmail(),
                    'preferred_language' => $user->getPreferredLanguage(),
                    'avatar' => $user->getAvatar(),
                    'video' => $user->getVideo(),
                    'quote' => $user->getQuote(),
                    'quote_author' => $user->getQuoteAuthor()]);
        }
    }
}
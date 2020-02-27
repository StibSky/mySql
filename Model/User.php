<?php


class User
{
    private $firstName;
    private $lastName;
    private $username;
    private $linkedin;
    private $github;
    private $email;
    private $preferred_language;
    private $avatar;
    private $video;
    private $quote;
    private $quote_author;


    /**
     * User constructor.
     * @param $firstName
     * @param $lastName
     * @param $username
     * @param $linkedin
     * @param $github
     * @param $email
     * @param $preferred_language
     * @param $avatar
     * @param $video
     * @param $quote
     * @param $quote_author
     */
    public function __construct($firstName, $lastName, $username, $linkedin, $github, $email, $preferred_language, $avatar, $video, $quote, $quote_author)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->username = $username;
        $this->linkedin = $linkedin;
        $this->github = $github;
        $this->email = $email;
        $this->preferred_language = $preferred_language;
        $this->avatar = $avatar;
        $this->video = $video;
        $this->quote = $quote;
        $this->quote_author = $quote_author;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return mixed
     */
    public function getLinkedin()
    {
        return $this->linkedin;
    }

    /**
     * @return mixed
     */
    public function getGithub()
    {
        return $this->github;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getPreferredLanguage()
    {
        return $this->preferred_language;
    }

    /**
     * @return mixed
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * @return mixed
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * @return mixed
     */
    public function getQuote()
    {
        return $this->quote;
    }

    /**
     * @return mixed
     */
    public function getQuoteAuthor()
    {
        return $this->quote_author;
    }





}
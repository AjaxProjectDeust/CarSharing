<?php

class UserComment
{
    private $text;
    private $authoruser;
    private $user;
    private $userassociat;

    public function __construct($text = "Not defined", $authoruser = "Not defined", $user = "Not defined", $userassociat = "Not defined")
    {

        $this->text = $text;
        $this->authoruser = $authoruser;
        $this->user = $user;
        $this->userassociat = $userassociat;

    }

    public function getText()
    {
        return $this->text;
    }

    public function setText($text)
    {
        $this->text = $text;
    }

    public function getAuthoruser()
    {
        return $this->authoruser;
    }

    public function setAuthoruser($authoruser)
    {
        $this->authoruser = $authoruser;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $this->authoruser = $user;
    }

    public function getUserassociat()
    {
        return $this->userassociat;
    }

    public function setUserassociat($Userassociat)
    {
        $this->userassociat = $Userassociat;
    }


}
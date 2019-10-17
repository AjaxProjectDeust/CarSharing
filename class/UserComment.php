<?php

class UserComment
{
    private $text;
    private $userAuthor;
    private $date;
    private $userAssociated;

    public function __construct($text = "Pas de commentaire utilisateur", $userAuthor = "Not defined", 
        $date = "Not defined", $userAssociated = "Not defined")
    {

        $this->text = $text;
        $this->userAuthor = $userAuthor;
        $this->date = $date;
        $this->userAssociated = $userAssociated;

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
        return $this->userAuthor;
    }

    public function setAuthoruser($userAuthor)
    {
        $this->userAuthor = $userAuthor;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $this->userAuthor = $user;
    }

    public function getUserassociat()
    {
        return $this->userAssociate;
    }

    public function setUserassociat($Userassociat)
    {
        $this->userAssociate = $Userassociat;
    }


}
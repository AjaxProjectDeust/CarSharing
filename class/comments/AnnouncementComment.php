<?php

class AnnouncementComment
{
    private $text;
    private $authoruser;
    private $date;
    private $userassociat;

    public function __construct($text = "Not defined", $authoruser = "Not defined", $date = "Not defined", $userassociat = "Not defined")
    {

        $this->text = $text;
        $this->authoruser = $authoruser;
        $this->user = $date;
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

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
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
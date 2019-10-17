<?php

class Comments 
{
    private $text;
    private $user;
    private $date;
    
    // public function __construct($text = "Not Filled", $user = null, $date = date('m\d\Y h:i:s a'), $time = time() ) {
    public function __construct($text = "Nom définit", $user = "Nom définit") {
        $this->text = $text;
        $this->user = $user;
        $this->date = date("d/m/Y H:i:s");
    }

    /**
     * Get the value of text
     */ 
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set the value of text
     *
     * @return  self
     */ 
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Get the value of user
     */ 
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set the value of user
     *
     * @return  self
     */ 
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }
}
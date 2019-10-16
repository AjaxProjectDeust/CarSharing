<?php

class Car
{
    public static $listOfCars = [];

    private $mark;
    private $model;
    private $color;
    private $numberOfPlaces;

    /**
     * 
     */
    public function __construct($mark = "Pas définit", $model = "Pas définit", 
        $color = "Pas définit", $numberOfPlaces = "Pas définit") {

        $this->mark = $mark;
        $this->model = $model;
        $this->color = $color;
        $this->numberOfPlaces = $numberOfPlaces;

        array_push(self::$listOfCars, $this);
    }

    /*
    *
    */
    public function getMark(){
        return $this->mark;
    }
    
    /*
    *
    */
    public function setMark($mark){
        $this->mark= $mark;
    }

    /*
    *
    */
    public function getModel(){
        return $this->model;
    }

    /*
    *
    */
    public function setModel($model){
        $this->model = $model;
    }

    /*
    *
    */
    public function getColor(){
        return $this->color;
    }

    /*
    *
    */
    public function setColor(){
        $this->color = $color;
    }

    /**
     * Get the value of numberOfPlaces
     */ 
    public function getNumberOfPlaces()
    {
        return $this->numberOfPlaces;
    }

    /**
     * Set the value of numberOfPlaces
     *
     * @return  self
     */ 
    public function setNumberOfPlaces($numberOfPlaces)
    {
        $this->numberOfPlaces = $numberOfPlaces;

        return $this;
    }
}
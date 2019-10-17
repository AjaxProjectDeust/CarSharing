<?php

class Car
{
    public static $listOfCars = [];

    private $mark;
    private $model;
    private $color;
    private $numberOfSeats;

    /**
     * 
     */
    public function __construct($mark = "Non définit", $model = "Non définit", 
        $color = "Non définit", $numberOfSeats = "Non définit") {

        $this->mark = $mark;
        $this->model = $model;
        $this->color = $color;
        $this->numberOfSeats = $numberOfSeats;

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
     * Get the value of numberOfSeats
     */ 
    public function getNumberOfPlaces()
    {
        return $this->numberOfSeats;
    }

    /**
     * Set the value of numberOfSeats
     *
     * @return  self
     */ 
    public function setNumberOfPlaces($numberOfSeats)
    {
        $this->numberOfSeats = $numberOfSeats;

        return $this;
    }
}
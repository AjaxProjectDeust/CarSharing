<?php

class Car
{
    public static $listOfCars = [];

    private $mark;
    private $model;
    private $color;
    private $numberOfPlace;

    /**
     * 
     */
    private __construct($mark = "Not defined", $model = "Not Defined", $color = "Not Defined", $numberofPlace = "Not Defined") {

        $this->mark = $mark;
        $this->model = $model;
        $this->color = $color;
        $this->numberOfPlace = $numberOfPlace;
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

    /*
    *
    */
    public function getNumberOfPlace(){
        return $this->numberofPlace;
    }

    /*
    *
    */
    public function setNumberOfPlace($numberofPlace){
        $this->numberofPlace=$numberofPlace;
    }
}
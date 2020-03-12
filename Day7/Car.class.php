<?php

class Car {

    protected $color, $model, $brand;

    public function __construct($color, $model, $brand){
        $this->color = $color;
        $this->model = $model;
        $this->brand = $brand;
    }

    public function getColor(){
        return $this->color;
    }

    public function setColor($color){
        $this->color = $color;
    }

    public function getModel(){
        return $this->model;
    }

    public function setModel($model){
        $this->color = $model;
    }

    public function getBrand(){
        return $this->brand;
    }

    public function setBrand($brand){
        $this->color = $brand;
    }
}



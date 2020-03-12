<?php

    include_once './Car.class.php';

    class MentorCar extends Car{
        public function specs(){
            return $this->getColor().' '.$this->getModel().' '.$this->getBrand().'<br>';
        }
    }
    
    class StudentCar extends Car{
        public function specs(){
            return $this->getColor().' '.$this->getModel().' '.$this->getBrand().'<br>';
        }
    }

    $Jake = new StudentCar('green', 'Rio', 'Kia');
    $Aodhan = new StudentCar('hotred', 'lamborghini', 'aventador');

    echo $Jake->specs();
    echo $Aodhan->specs();
    
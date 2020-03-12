<?php

    include_once './Car.class.php';

    class MentorCar extends Car{
        public function specs(){
            return $this->color.' '.$this->model.' '.$this->brand.'<br>';
        }
    }
    
    
    class StudentCar extends Car{
        public function specs(){
            return $this->color.' '.$this->model.' '.$this->brand.'<br>';
        }
    }

    $Jake = new StudentCar('green', 'Rio', 'Kia');
    $Aodhan = new StudentCar('hotred', 'lamborghini', 'aventador');

    echo $Jake->specs();
    echo $Aodhan->specs();
    
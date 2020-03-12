<?php

    include_once './Phpclass.interface.php';

    class Mentor implements IPhpClass{

        private $mentor, $sdate, $batch, $student = array();

        public function __construct($name){
            $this->mentor = $name;
            $this->startDate();
            $this->classBatch();
        }

        public function startDate(){
             $this->sdate = date("Y/M/d", 1583193600);
        }

        public function getDate(){
            return $this->sdate;
        }

        public function classBatch(){
            $this->batch = 2;
        }

        public function getClassBatch(){
            return $this->batch;
        }

        public function setStudentName($name,$last){
            array_push($this->student, $name.' '.$last);
        }

        public function getStudentName(){
            return $this->student;
        }
    }
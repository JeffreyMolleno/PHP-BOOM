<?php

    include_once './Phpclass.abstract.php';

 class Mentor extends APhpClass{

    private $mentor, $students=array(), $grades=array();

    public function __construct($name){
        $this->mentor = $name;
    }

    function setEnrollSudent($name){
        array_push($this->students,$name);
    }

    function getEnrolledStudents(){
        return $this->students;
    }

    function setGrade($id, $grade){

        if($id < sizeof($this->students)){
            $this->grades[$id] = $grade;  
        }else{
            print('<br> ghost id detected <br>');
        }
    }

    function getGrade($id){
        if($id < sizeof($this->students)){
            return $this->grades[$id];
        }else{
            return 'ghost id detected';
        }
    }

    function getAllGrade(){
        $a_grade = array();
        $index = 0;

        foreach($this->grades as $grade){
            array_push($a_grade, $this->students[$index].'='.$grade);
            $index++;
        }

        return $a_grade;
    }
 }
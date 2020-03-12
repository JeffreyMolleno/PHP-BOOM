<?php

abstract class APhpClass {
    
    abstract function setEnrollSudent($name);
    abstract function getEnrolledStudents();
    abstract function setGrade($id, $grade);
    abstract function getGrade($id);
    abstract function getAllGrade();
}
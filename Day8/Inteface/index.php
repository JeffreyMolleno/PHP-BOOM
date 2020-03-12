<?php

    include_once './Mentor.class.php';

    $mentor = new Mentor("Jino Lacson");
    echo $mentor->getDate() . '<br>';
    echo $mentor->getClassBatch() . '<br>';

    $mentor->setStudentName('Jaymard','Menor');
    $mentor->setStudentName('Delfin','Danas');
    $mentor->setStudentName('Vincent','Kapote');

    echo  '<br>';
    print_r($mentor->getStudentName()) ;



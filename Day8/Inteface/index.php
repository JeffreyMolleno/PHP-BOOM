<?php

    include_once './Mentor.class.php';

    $mentor = new Mentor("Jino Lacson");
    echo 'Start Date:'.$mentor->getDate() . '<br>';
    echo 'Batch Number: '.$mentor->getClassBatch().'<br>';

    $mentor->setStudentName('Jaymard','Menor');
    $mentor->setStudentName('Delfin','Danas');
    $mentor->setStudentName('Vincent','Kapote');

    echo  'Students: <br>';
    print_r($mentor->getStudentName()) ;



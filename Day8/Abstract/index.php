<?php

    include_once './Mentor.abs.class.php';

    $mentor_2 = new Mentor('Jino Lacson');

    $mentor_2->setEnrollSudent('Jaymard Menor');
    $mentor_2->setEnrollSudent('Delfin Danas');
    $mentor_2->setEnrollSudent('Mark Medes');
    $mentor_2->setEnrollSudent('Hamlet De Los Reyes');
    $mentor_2->setEnrollSudent('Yow Molleno');
    $mentor_2->setEnrollSudent('Gino Aquino');
    $mentor_2->setEnrollSudent('Francisco Ifurung');
    $mentor_2->setEnrollSudent('Raphael Raquion');
    $mentor_2->setEnrollSudent('Vincent Serra');
    $mentor_2->setEnrollSudent('Vanessa Dulva');

    print('Students Enrolled: <br>');
    print_r($mentor_2->getEnrolledStudents());

    print('<br><br>');

    $mentor_2->setGrade(0, 91);
    $mentor_2->setGrade(1, 92);
    $mentor_2->setGrade(2, 93);
    $mentor_2->setGrade(3, 94);
    $mentor_2->setGrade(4, 95);
    $mentor_2->setGrade(5, 96);
    $mentor_2->setGrade(6, 97);
    $mentor_2->setGrade(7, 98);
    $mentor_2->setGrade(8, 269);
    $mentor_2->setGrade(9, 99);

    print('Grades: <br>');
    print_r($mentor_2->getAllGrade());




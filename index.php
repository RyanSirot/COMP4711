<?php
/**
 * Created by PhpStorm.
 * User: To Olympus
 * Date: 2017-01-11
 * Time: 10:22 AM
 */
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <?php
        include('Student.php');

        $students = array();

    // adds a first student to the array
        $first = new Student();
        $first->surname = "Doe";
        $first->firstname = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;

    // adds a second student to the array
        $second = new Student();
        $second->surname = "Einstein";
        $second->firstname = "Albert";
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;

    // adds a third student to the array
        $third = new Student();
        $third->surname = "Dicks";
        $third->firstname = "Ryan";
        $third->add_email('home','torisnayr@gmail.com');
        $third->add_grade(95);
        $third->add_grade(80);
        $third->add_grade(50);
        $students['a00929055'] = $third;

        ksort($students); // one of the many sort functions

        foreach($students as $student){
            echo $student->toString();
        }



        ?>
    </body>
</html>

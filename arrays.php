<?php
    #ARRAYS
    /*
        - Indexed
        - Associative
        - Multi-dimensional
    */

    #INDEXED
    $people = array('Kevin', 'Jeremy', 'Sara');
    $ids = array(23, 55, 12);
    $cars = ['Honda', 'Toyota', 'Ford'];
    $cars[3] = 'Chevy';
    $cars[] = 'BMW';

    //echo count($cars);
    //print_r($cars);
    //var_dump($cars);

    //echo $people[1];

    #ASSOCIATICE ARRAYS
    $people = array('Brad' => 35, 'Jose' => 32, 'William =>37');
    $peopleIds = [22 => 'Brad', 44=> 'Jose', 63 => 'William'];

    //echo $people['Brad'];
    //echo $peopleIds[22];
    $people['Jill'] = 42;
    //echo $people['Jill'];

    #MULTI_DIMENSIONAL
    $cars = array(
        array('Honda', 20, 10),
        array('Toyota', 30, 20),
        array('Ford', 40, 16)
    );

    echo $cars[1][2];
?>
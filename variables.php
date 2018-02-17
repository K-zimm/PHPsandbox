<?php
    //single line comement
    #single line commment
    /* Multiline
        Comment
    */

    #VARIABLES
    /* 
        -Prefix $
        -Start with a letter or an underscore
        -only letters, numbers and underscores
        -Case Sensitive
    */

    #DATA TYPES
    /*
        String
        Intergers
        floats
        Booleans
        Arrays
        Objects
        NULL
        Resource
    */

    $output = 'Hello World';
    $num1 = 4;
    $num2 = 10;
    $sum = $num1 + $num2;

    $string1 = 'Hello';
    $string2 = 'World';
    $greeting = $string1 . ' ' . $string2;
    $greeting2 = "$string1 $string2";

    $string3 = 'They\'re here';

    $float1 = 4.4;
    $bool1 = true;

    define('GREETING', 'Hello Everyone');

    echo GREETING;
?>
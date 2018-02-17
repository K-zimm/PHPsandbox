<?php
    #PHP FUNCTIONS
    /*
        Camel Case - myFunction()
        lower Case - my_function()
        pascal case - MyFunction()
    */

    function simpleFunction(){
        echo 'Hello World';
    }

    // simpleFunction();

    function sayHello($name){
        echo $name;
    }

    // sayHello('Kyle');

    #RETURN VALUE
    function addNumbers($num1, $num2){
        return $num1 + $num2;
    }

    //echo addNumbers(2, 10);

    #BY REFERENCE
    $myNum = 10;

    function addFive($num){
        $num += 5;
    }

    function addTen(&$num){
        $num += 10;
    }

    addFive($myNum);

    echo "Value: $myNum<br>";

    addTen($myNum);

    echo "Value: $myNum<br>";
?>
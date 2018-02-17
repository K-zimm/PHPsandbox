<?php
    # LOOPS

    /*
        For
        While
        Do..While
        Foreach
    */

    #FOR LOOP
    # @params - init, condiition, inc

    /*
    for($i = 0;$i < 10;$i++){
        echo 'Number ' . $i;
        echo '<br>';
    }
    */

    #WHILE LOOP
    # @params - condition

    /*
    $i = 0;

    while($i < 10){
        echo $i;
        echo '<br>';
        $i++;
    }
    */
    
    # DO..While
    # @params - condition

    // $i = 0;

    // do{
    //     echo $i;
    //     echo '<br>';
    //     $i++;
    // }

    // while($i < 10);

    #FOREACH LOOP
    // $people = ['Brad', 'Jose', 'William'];

    // foreach($people as $person){
    //     echo $person;
    //     echo '<br>';
    // }

    $people = ['Brad' => 'brad@gmail.com', 'Jose' => 'Jose@gmail.com',
         'William' => 'will@gmail.com'];

    foreach($people as $person => $email){
        echo $person. ': '.$email;
        echo '<br>';
    }
?>
<?php
    # substr()
    #Returns a portion of a string

    // $output = substr('Hello', 1, 3);
    // $output = substr('Hello', -2);
    // echo $output;

    # strlen()
    # Returns the length of a string

    // $output = strlen('Hello World');
    // echo $output;

    // $output = strpos('Hello World', 'o');
    // echo $output;

    // $output = strrpos('Hello World', 'o');
    // echo $output;

    # trim()
    # Strips whitespace

    // $text = 'Hello World          ';
    // var_dump($text);

    // $trimmed = trim($text);
    // var_dump($trimmed);

    # strtoupper / strtolower

    // $output = strtoupper('Hello World');
    // echo $output;

    # ucword()
    # capitalize every word

    // $output = ucwords('hello world');
    // echo $output;

    # str_replace()
    # Replace all occurences of a search string with a replacement

    // $text = 'Hello World';
    // $output = str_replace('World', 'Everyone', $text);
    // echo $output;

    # is_string()
    # Check if string

    // $val = 'Hello';
    // $output = is_string($val);

    // echo $output;

    // $values = array(true, false, null, 'abc', 33, '33', 22.4, '22.4', '', ' ', 0, '0');

    // foreach($values as $value){
    //     if(is_string($value)){
    //         echo "{$value} is a string<br>";
    //     }
    // };

    # gzcompress()
    # compress a string

    $text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    Quis minima quia odio nostrum, dolorem earum. Dolores magni consequuntur 
    assumenda illo suscipit, quis, quo nam dolor libero ratione et? Dolorum 
    deserunt a numquam, recusandae nesciunt mollitia animi asperiores delectus 
    pariatur debitis!';

    $compressed = gzcompress($text);
    //echo $compressed;

    $original = gzuncompress($compressed);
    echo $original;


?>
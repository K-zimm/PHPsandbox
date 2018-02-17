<?php
    // echo date('d');   // Day
    //echo date ('m');    // month
    //echo date ('y');    // year
    //echo date ('l');    //Day of the week

    //echo date('y/m/d');
    //echo date('m-d-y');

    //echo date('h');  //hour
    //echo date('i');  //min
    //echo date('s');  //Second
    //echo date('a');  //Am or pm

    //Set Time Zone
    date_default_timezone_set('America/Chicago');

    //echo date('h:i:sa');

    $timestamp = mktime(10, 14, 54, 9, 10, 1981);
    //echo $timestamp;

    //echo date('m/d/y h:i:sa', $timestamp);

    $timestamp2 = strtotime('7:00pm March 22 2016');
    $timestamp3 = strtotime('tomorrow');
    $timestamp4 = strtotime('next Sunday');

    //echo $timestamp2;
    echo date('m/d/y h:i:sa', $timestamp4);
?>
<?php
    # $_SERVER SUPERGLOBAL

    // Create server array
    $server = [
        'Host Server Name' => $_SERVER['SERVER_NAME'],
        'Host Header' => $_SERVER['HTTP_HOST'],
        'Server Software' => $_SERVER['SERVER_SOFTWARE'],
        'Document Root' => $_SERVER['DOCUMENT_ROOT'],
        'Current Page' => $_SERVER['PHP_SELF'],
        'Script Name' => $_SERVER['SCRIPT_NAME'],
        'Absolute Path' => $_SERVER['SCRIPT_FILENAME']
    ];
    // echo "<h1>Server Info</h1>";
    // foreach($server as $key => $info){
    //     echo "<b>$key:</b> $info<br>";
    // }
    // Create client Arrray

    // echo "<br><br><br><h1>Client Info</h1>";

    $client = [
        'Client System info' => $_SERVER['HTTP_USER_AGENT'],
        'Client IP' => $_SERVER['REMOTE_ADDR'],
        'Remote Port' => $_SERVER['REMOTE_PORT']
    ];

    // foreach($client as $key => $info){
    //     echo "<b>$key:</b> $info<br>";
    // }

?>
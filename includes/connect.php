<?php

// this file accesses our database...

    $db_dsn = array(
        'host' => 'localhost',
        'dbname' => ' ',
        'charset' => 'utf8'
    );

    $dsn = 'mysql:'.http_build_query($db_dsn, '', ';');

    //This is the DB credentials

    $db_user = 'root';
    $db_pass = 'Jordessa';

    try {
        $pdo = new PDO($dsn, $db_user, $db_pass);
        // var_dump($pdo); // this allows us to see the representation of the connection to ensure it's working
        // echo "Connected Successfully!";
    } catch (PDOException $exception) {
        echo 'Connection Error:'.$exception->getMessage();
        exit();
    }
